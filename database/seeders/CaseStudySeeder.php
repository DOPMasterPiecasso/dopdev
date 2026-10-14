<?php

/**
 * Seeder blog berbasis data portofolio di pages/case-studies.php.
 *
 * - Kartu portofolio (judul, klien, kategori, gambar, hasil/metric) di-parse
 *   langsung dari HTML case-studies.php supaya seed selalu sinkron.
 * - Detail naratif (challenge, solution, features, quote) diambil dari
 *   array $case_studies di pages/case-study.php.
 */

const CASE_CATEGORY_LABELS = [
	'lp' => 'Landing Page',
	'company' => 'Website Company',
	'booking' => 'Booking System',
	'system' => 'Web System',
];

const CASE_ALIASES = [
	'barber' => 'barbershop',
	'barbershop' => 'barbershop',
	'clinic' => 'clinic',
	'aesthetic' => 'clinic',
	'salon' => 'salon',
	'hair' => 'salon',
	'fitness' => 'fitness',
	'trainer' => 'fitness',
	'personal-trainer' => 'fitness',
];

/** Ambil array $case_studies dari pages/case-study.php tanpa merender halamannya. */
function case_study_details(): array {
	static $cache = null;
	if ($cache !== null) {
		return $cache;
	}

	$cache = [];
	$src = @file_get_contents(ROOT . '/pages/case-study.php');
	if ($src === false) {
		return $cache;
	}

	$start = strpos($src, '$case_studies = [');
	$end = $start === false ? false : strpos($src, "\n];", $start);
	if ($start === false || $end === false) {
		return $cache;
	}

	$case_studies = [];
	eval(substr($src, $start, $end - $start + 3)); // aman: literal array dari file proyek sendiri
	$cache = is_array($case_studies) ? $case_studies : [];

	return $cache;
}

function case_study_resolve_detail(string $key): ?array {
	$details = case_study_details();
	$key = CASE_ALIASES[$key] ?? $key;
	return $details[$key] ?? null;
}

/** Parse semua kartu portofolio di pages/case-studies.php. */
function case_study_cards(): array {
	$src = @file_get_contents(ROOT . '/pages/case-studies.php');
	if ($src === false) {
		return [];
	}

	// Buang blok PHP supaya jadi HTML murni
	$html = preg_replace('/<\?php.*?\?>/s', '', $src);

	libxml_use_internal_errors(true);
	$dom = new DOMDocument();
	$dom->loadHTML(
		'<meta http-equiv="Content-Type" content="text/html; charset=utf-8">' .
			$html,
		LIBXML_NONET | LIBXML_NOERROR | LIBXML_NOWARNING,
	);
	libxml_use_internal_errors(false);

	$xp = new DOMXPath($dom);
	$text = static function (?DOMNode $node): string {
		if (!$node) {
			return '';
		}
		return trim(preg_replace('/\s+/', ' ', $node->textContent));
	};

	$cards = [];
	$seen = [];

	foreach (array_keys(CASE_CATEGORY_LABELS) as $sectionId) {
		$section = $xp->query('//div[@id="' . $sectionId . '"]')->item(0);
		if (!$section) {
			continue;
		}

		$nodes = $xp->query(
			'.//div[contains(@class,"relative") and contains(@class,"group") and .//h3 and .//img]',
			$section,
		);

		foreach ($nodes as $node) {
			$title = $text($xp->query('.//h3', $node)->item(0));
			if ($title === '' || isset($seen[$title])) {
				continue;
			}

			$img = $xp->query('.//img', $node)->item(0);
			$anchor = $xp
				->query('.//a[contains(@href,"case-study")]', $node)
				->item(0);
			$descNode = $xp
				->query('.//p[contains(@class,"text-default-500")]', $node)
				->item(0);
			$clientNode = $xp
				->query(
					'.//span[contains(@class,"text-primary") and not(contains(@class,"font-bold"))]',
					$node,
				)
				->item(0);
			$metricNode = $xp
				->query('.//span[contains(@class,"font-bold")]', $node)
				->item(0);
			$badgeNode = $xp
				->query(
					'.//div[contains(@class,"bg-default-100") and contains(@class,"border")]',
					$node,
				)
				->item(0);

			$href = $anchor ? (string) $anchor->getAttribute('href') : '';
			$caseKey = '';
			if (preg_match('/case=([a-z0-9\-_]+)/i', $href, $m)) {
				$caseKey = strtolower($m[1]);
			}

			$seen[$title] = true;
			$cards[] = [
				'title' => $title,
				'category' => CASE_CATEGORY_LABELS[$sectionId],
				'client' => $text($clientNode),
				'description' => $text($descNode),
				'metric' => $text($metricNode),
				'badge' => $text($badgeNode),
				'image' => $img ? (string) $img->getAttribute('src') : '',
				'image_alt' => $img ? (string) $img->getAttribute('alt') : '',
				'case_key' => $caseKey,
			];
		}
	}

	return $cards;
}

/** Susun konten HTML postingan dari data kartu + detail case study. */
function case_study_post_content(array $card, ?array $detail): string {
	$h = static fn(string $s) => htmlspecialchars($s, ENT_QUOTES);

	$out = [];

	// Lead paragraph
	if ($detail && !empty($detail['subtitle'])) {
		$out[] =
			'<p class="mb-12.5 text-lg">' . $h($detail['subtitle']) . '</p>';
	} elseif ($card['description'] !== '') {
		$out[] =
			'<p class="mb-12.5 text-lg">' . $h($card['description']) . '</p>';
	}

	// Hasil (metric) — tampil paling awal karena paling menarik pembaca
	if ($detail && !empty($detail['results'])) {
		$out[] = '<h2 class="text-[32px] mb-5">Results at a glance</h2>';
		$out[] = '<div class="grid md:grid-cols-3 gap-5 mb-12.5">';
		foreach (array_slice($detail['results'], 0, 3) as $r) {
			$out[] =
				'<div class="bg-default-100 rounded-lg p-6">' .
				'<div class="text-2xl font-bold text-primary mb-1">' .
				$h($r['metric']) .
				'</div>' .
				'<div class="text-sm font-semibold text-default-900 mb-2">' .
				$h($r['label']) .
				'</div>' .
				'<p class="text-sm text-default-600">' .
				$h($r['desc']) .
				'</p>' .
				'</div>';
		}
		$out[] = '</div>';
	} elseif ($card['metric'] !== '') {
		$out[] =
			'<p class="mb-12.5"><span class="font-bold text-primary">' .
			$h($card['metric']) .
			'</span>' .
			($card['description'] !== ''
				? ' — ' . $h($card['description'])
				: '') .
			'</p>';
	}

	if ($detail) {
		if (!empty($detail['challenge'])) {
			$out[] = '<h2 class="text-[32px] mb-2.5">The challenge</h2>';
			$out[] = '<p class="mb-12.5">' . $h($detail['challenge']) . '</p>';
		}

		if (!empty($detail['solution'])) {
			$out[] = '<h2 class="text-[32px] mb-2.5">What we built</h2>';
			$out[] = '<p class="mb-12.5">' . $h($detail['solution']) . '</p>';
		}

		if (!empty($detail['features'])) {
			$out[] = '<h2 class="text-[32px] mb-2.5">Key features</h2>';
			$out[] =
				'<ul class="list-disc list-inside space-y-2.5 mb-12.5" role="list">';
			foreach ($detail['features'] as $feature) {
				$out[] = '<li>' . $h($feature) . '</li>';
			}
			$out[] = '</ul>';
		}

		if (!empty($detail['quote'])) {
			$out[] =
				'<blockquote class="bg-default-950 text-white rounded-lg p-12.5 mb-10">' .
				'<em class="italic text-lg">&ldquo;' .
				$h($detail['quote']) .
				'&rdquo;</em>';
			if (!empty($detail['author'])) {
				$out[] =
					'<footer class="mt-5 text-sm text-default-300">— ' .
					$h($detail['author']) .
					(!empty($detail['role'])
						? ', ' . $h($detail['role'])
						: '') .
					'</footer>';
			}
			$out[] = '</blockquote>';
		}
	} else {
		$out[] =
			'<h2 class="text-[32px] mb-2.5">Built for service businesses</h2>';
		$out[] =
			'<p class="mb-12.5">Every project in our portfolio follows the same playbook: a fast company-profile website, ' .
			'a booking flow that removes friction, and integrations (WhatsApp reminders, deposits, staff scheduling) that keep ' .
			'the calendar full and no-shows low. This ' .
			$h(strtolower($card['category'])) .
			' project shows that playbook in action.</p>';
	}

	$out[] =
		'<p>Want a similar system for your barbershop, clinic, salon or studio? ' .
		'<a href="/contact" class="text-primary underline underline-offset-3">Talk to the DOP team</a> and we will map the right setup for your business.</p>';

	return implode("\n", $out);
}

/**
 * Jalankan seeder.
 * @return array{created:int, skipped:int}
 */
function case_study_seeder_run(bool $fresh = false): array {
	$created = 0;
	$skipped = 0;

	if ($fresh) {
		db_run('DELETE FROM blog_posts');
		// Reset autoincrement supaya id mulai lagi dari 1
		db_run("DELETE FROM sqlite_sequence WHERE name = 'blog_posts'");
	}

	$base = new DateTimeImmutable('2025-06-20 09:00:00');
	$index = 0;

	foreach (case_study_cards() as $card) {
		$detail =
			$card['case_key'] !== ''
				? case_study_resolve_detail($card['case_key'])
				: null;

		$slug = blog_slugify($card['title']);
		if (
			!$fresh &&
			db_value('SELECT id FROM blog_posts WHERE slug = ?', [$slug]) !==
				null
		) {
			$skipped++;
			continue;
		}

		$excerpt = $card['description'];
		if ($excerpt === '') {
			$excerpt =
				'A closer look at how DOP delivered “' .
				$card['title'] .
				'” — part of our ' .
				$card['category'] .
				' work for service businesses in Singapore and Australia.';
		}

		$cover =
			$card['image'] !== ''
				? $card['image']
				: 'images/blog/' . (($index % 6) + 1) . '.webp';
		$author =
			($detail['author'] ?? '') !== '' ? $detail['author'] : 'DOP Team';

		blog_create([
			'title' => $card['title'],
			'slug' => $slug,
			'excerpt' => $excerpt,
			'content' => case_study_post_content($card, $detail),
			'category' => $card['category'],
			'cover_image' => $cover,
			'author' => $author,
			'status' => 'published',
			'published_at' => $base
				->modify('-' . $index * 7 . ' days')
				->format('Y-m-d H:i:s'),
		]);

		$created++;
		$index++;
	}

	return ['created' => $created, 'skipped' => $skipped];
}

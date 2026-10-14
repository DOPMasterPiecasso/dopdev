<?php

/**
 * Repository postingan blog (tabel blog_posts).
 * Dipakai halaman publik (/blog, /blog-details/{slug}) dan admin (/admin).
 */

const BLOG_PER_PAGE = 6;

function blog_slugify(string $text): string {
	$text = strtolower(trim($text));
	$text = preg_replace('/[^a-z0-9]+/', '-', $text);
	$text = trim($text, '-');
	return $text !== ''
		? $text
		: 'post-' . substr(md5((string) microtime(true)), 0, 6);
}

function blog_unique_slug(string $slug, ?int $ignoreId = null): string {
	$unique = $slug;
	$i = 2;

	while (true) {
		$sql = 'SELECT COUNT(*) FROM blog_posts WHERE slug = ?';
		$params = [$unique];

		if ($ignoreId !== null) {
			$sql .= ' AND id != ?';
			$params[] = $ignoreId;
		}

		if ((int) db_value($sql, $params) === 0) {
			return $unique;
		}

		$unique = $slug . '-' . $i;
		$i++;
	}
}

/**
 * Daftar kategori unik (dipakai filter di halaman blog & select di admin).
 */
function blog_categories(): array {
	$rows = db_all(
		"SELECT DISTINCT category FROM blog_posts WHERE category <> '' ORDER BY category",
	);
	return array_values(array_map(static fn($r) => $r['category'], $rows));
}

/**
 * Listing postingan published dengan filter kategori + pagination.
 * @return array{posts: array, total: int}
 */
function blog_list(
	int $page = 1,
	int $perPage = BLOG_PER_PAGE,
	string $category = ''
): array {
	$page = max(1, $page);
	$offset = ($page - 1) * $perPage;

	$where = "status = 'published'";
	$params = [];

	if ($category !== '') {
		$where .= ' AND category = ?';
		$params[] = $category;
	}

	$total = (int) db_value(
		"SELECT COUNT(*) FROM blog_posts WHERE $where",
		$params,
	);

	$posts = db_all(
		"SELECT * FROM blog_posts WHERE $where ORDER BY COALESCE(published_at, created_at) DESC, id DESC LIMIT $perPage OFFSET $offset",
		$params,
	);

	return ['posts' => $posts, 'total' => $total];
}

function blog_find_published(string $slug): ?array {
	return db_one(
		"SELECT * FROM blog_posts WHERE slug = ? AND status = 'published'",
		[$slug],
	);
}

function blog_latest(): ?array {
	return db_one(
		"SELECT * FROM blog_posts WHERE status = 'published' ORDER BY COALESCE(published_at, created_at) DESC, id DESC LIMIT 1",
	);
}

function blog_find(int $id): ?array {
	return db_one('SELECT * FROM blog_posts WHERE id = ?', [$id]);
}

function blog_related(string $slug, string $category, int $limit = 3): array {
	$posts = db_all(
		"SELECT * FROM blog_posts WHERE status = 'published' AND slug != ? ORDER BY (category = ?) DESC, COALESCE(published_at, created_at) DESC LIMIT $limit",
		[$slug, $category],
	);
	return $posts;
}

function blog_create(array $data): int {
	db_run(
		'INSERT INTO blog_posts (title, slug, excerpt, content, category, cover_image, author, status, published_at)
		 VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)',
		blog_payload($data),
	);
	return (int) db()->lastInsertId();
}

function blog_update(int $id, array $data): void {
	db_run(
		'UPDATE blog_posts
		 SET title = ?, slug = ?, excerpt = ?, content = ?, category = ?, cover_image = ?, author = ?, status = ?, published_at = ?, updated_at = datetime(\'now\')
		 WHERE id = ?',
		array_merge(blog_payload($data), [$id]),
	);
}

function blog_delete(int $id): void {
	db_run('DELETE FROM blog_posts WHERE id = ?', [$id]);
}

function blog_stats(): array {
	return [
		'total' => (int) db_value('SELECT COUNT(*) FROM blog_posts'),
		'published' => (int) db_value(
			"SELECT COUNT(*) FROM blog_posts WHERE status = 'published'",
		),
		'drafts' => (int) db_value(
			"SELECT COUNT(*) FROM blog_posts WHERE status = 'draft'",
		),
	];
}

/** URL pagination halaman blog publik. */
function blog_page_url(int $page, string $category = ''): string {
	$params = [];
	if ($page > 1) {
		$params['page'] = $page;
	}
	if ($category !== '') {
		$params['cat'] = $category;
	}
	return '/blog' . ($params ? '?' . http_build_query($params) : '');
}

/**
 * Normalisasi input form admin (array binding untuk insert/update).
 */
function blog_payload(array $data): array {
	$title = trim($data['title'] ?? '');
	$status =
		($data['status'] ?? 'draft') === 'published' ? 'published' : 'draft';

	$publishedAt = trim($data['published_at'] ?? '');
	if ($publishedAt === '') {
		$publishedAt = $status === 'published' ? date('Y-m-d H:i:s') : null;
	} else {
		// Dari input type="datetime-local" (Y-m-dTH:i) -> Y-m-d H:i:s
		$publishedAt = str_replace('T', ' ', $publishedAt);
		if (strlen($publishedAt) === 16) {
			$publishedAt .= ':00';
		}
	}
	if ($status === 'draft') {
		$publishedAt = null;
	}

	$slug = blog_slugify(
		trim($data['slug'] ?? '') !== '' ? trim($data['slug']) : $title,
	);
	$slug = blog_unique_slug(
		$slug,
		isset($data['id']) ? (int) $data['id'] : null,
	);

	return [
		$title,
		$slug,
		trim($data['excerpt'] ?? ''),
		$data['content'] ?? '',
		trim($data['category'] ?? '') !== ''
			? trim($data['category'])
			: 'Insights',
		trim($data['cover_image'] ?? ''),
		trim($data['author'] ?? '') !== '' ? trim($data['author']) : 'DOP Team',
		$status,
		$publishedAt,
	];
}

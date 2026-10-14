#!/usr/bin/env php
<?php
/**
 * Seed postingan blog dari data portofolio pages/case-studies.php.
 *
 *   php bin/seed.php            # insert postingan baru (slug yang sudah ada dilewati)
 *   php bin/seed.php --fresh    # hapus semua postingan lalu seed ulang
 */

define('ROOT', dirname(__DIR__));
chdir(ROOT);

require_once ROOT . '/system/env.php';
require_once ROOT . '/system/db.php';
require_once ROOT . '/system/blog.php';
require_once ROOT . '/database/seeders/CaseStudySeeder.php';

// Pastikan struktur tabel sudah ada
if (
	db_value(
		"SELECT COUNT(*) FROM sqlite_master WHERE type = 'table' AND name = 'blog_posts'",
	) === null ||
	(int) db_value(
		"SELECT COUNT(*) FROM sqlite_master WHERE type = 'table' AND name = 'blog_posts'",
	) === 0
) {
	echo "Tabel blog_posts belum ada. Jalankan dulu: php bin/migrate.php\n";
	exit(1);
}

$fresh = in_array('--fresh', $argv ?? [], true);

echo 'Seeding blog dari pages/case-studies.php' .
	($fresh ? ' (fresh)' : '') .
	" ...\n";

try {
	$result = case_study_seeder_run($fresh);
} catch (\Throwable $e) {
	fwrite(STDERR, 'Seeder gagal: ' . $e->getMessage() . "\n");
	exit(1);
}

echo "Selesai. {$result['created']} postingan dibuat, {$result['skipped']} dilewati (sudah ada).\n";
echo 'Total di database: ' . blog_stats()['total'] . " postingan.\n";


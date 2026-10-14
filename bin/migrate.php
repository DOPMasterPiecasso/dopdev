#!/usr/bin/env php
<?php
/**
 * Jalankan semua migration yang belum dieksekusi.
 *
 *   php bin/migrate.php
 *   php bin/migrate.php --status
 */

define('ROOT', dirname(__DIR__));
chdir(ROOT);

require_once ROOT . '/system/env.php';
require_once ROOT . '/system/db.php';

$migrationsDir = ROOT . '/database/migrations';

if (!is_dir($migrationsDir)) {
	echo "Folder migration tidak ditemukan: database/migrations\n";
	exit(1);
}

db_run(
	'CREATE TABLE IF NOT EXISTS migrations (
		id INTEGER PRIMARY KEY AUTOINCREMENT,
		name TEXT NOT NULL UNIQUE,
		applied_at TEXT NOT NULL DEFAULT (datetime(\'now\'))
	)',
);

$applied = array_map(
	static fn($r) => $r['name'],
	db_all('SELECT name FROM migrations ORDER BY name'),
);

$files = glob($migrationsDir . '/*.sql') ?: [];
sort($files);

$onlyStatus = in_array('--status', $argv ?? [], true);

if ($onlyStatus) {
	echo "Applied migrations:\n";
	foreach ($applied as $name) {
		echo "  - $name\n";
	}
	$pending = array_filter(
		$files,
		static fn($f) => !in_array(basename($f), $applied, true),
	);
	echo count($pending) === 0
		? "Tidak ada migration pending.\n"
		: "Pending:\n" .
			implode(
				"\n",
				array_map(static fn($f) => '  - ' . basename($f), $pending),
			) .
			"\n";
	exit(0);
}

if (count($files) === 0) {
	echo "Tidak ada file migration.\n";
	exit(0);
}

foreach ($files as $file) {
	$name = basename($file);

	if (in_array($name, $applied, true)) {
		continue;
	}

	$sql = file_get_contents($file);
	if ($sql === false) {
		fwrite(STDERR, "Gagal membaca $name\n");
		exit(1);
	}

	echo "Migrating: $name ... ";

	db()->exec('BEGIN');
	try {
		db()->exec($sql);
		db_run('INSERT INTO migrations (name) VALUES (?)', [$name]);
		db()->exec('COMMIT');
	} catch (\Throwable $e) {
		db()->exec('ROLLBACK');
		fwrite(STDERR, 'Gagal: ' . $e->getMessage() . "\n");
		exit(1);
	}

	echo "OK\n";
}

echo 'Selesai. Database: ' . db_path() . " (journal_mode=WAL)\n";


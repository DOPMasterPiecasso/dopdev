<?php

/**
 * Koneksi SQLite (PDO) dengan mode WAL + helper query kecil.
 *
 * File database: database/dop.sqlite (lihat bin/migrate.php & bin/seed.php)
 */

function db_path(): string {
	$dir = (defined('ROOT') ? ROOT : dirname(__DIR__)) . '/database';
	return $dir . '/' . env('DB_FILE', 'dop.sqlite');
}

function db(): PDO {
	static $pdo = null;

	if ($pdo === null) {
		$path = db_path();
		$dir = dirname($path);

		if (!is_dir($dir)) {
			mkdir($dir, 0775, true);
		}

		$pdo = new PDO('sqlite:' . $path, null, null, [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			PDO::ATTR_EMULATE_PREPARES => false,
		]);

		// WAL: reader tidak memblokir writer (dan sebaliknya) — cocok untuk
		// admin (write) + halaman blog publik (read) yang berjalan bersamaan.
		$pdo->exec('PRAGMA journal_mode = WAL');
		$pdo->exec('PRAGMA synchronous = NORMAL');
		$pdo->exec('PRAGMA busy_timeout = 5000');
		$pdo->exec('PRAGMA foreign_keys = ON');
	}

	return $pdo;
}

function db_run(string $sql, array $params = []): PDOStatement {
	$stmt = db()->prepare($sql);
	$stmt->execute($params);
	return $stmt;
}

function db_all(string $sql, array $params = []): array {
	return db_run($sql, $params)->fetchAll();
}

function db_one(string $sql, array $params = []): ?array {
	$row = db_run($sql, $params)->fetch();
	return $row === false ? null : $row;
}

function db_value(string $sql, array $params = []) {
	$value = db_run($sql, $params)->fetchColumn();
	return $value === false ? null : $value;
}

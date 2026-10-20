<?php

// Auto-route folder demo/ — tempat upload HTML statis. Tiap subfolder jadi route
// di root, tanpa prefix /demo:
//
//   demo/barbershop/index.html   -> GET /barbershop  (juga /barbershop/)
//   demo/barbershop/style.css    -> GET /barbershop/style.css
//   demo/barbershop/img/logo.png -> GET /barbershop/img/logo.png
//
// Dipanggil dari configs/routes.php hanya saat route aplikasi tidak ditemukan,
// jadi nama folder demo tidak pernah menimpa route yang sudah terdaftar.

/**
 * Content-Type fallback untuk file demo (dipakai bila static_content_type
 * dari index.php tidak tersedia, mis. mode `php -S -t public`).
 */
function demo_content_type(string $file): string {
	if (function_exists('static_content_type')) {
		return static_content_type($file);
	}

	$types = [
		'css' => 'text/css; charset=utf-8',
		'js' => 'application/javascript; charset=utf-8',
		'mjs' => 'application/javascript; charset=utf-8',
		'json' => 'application/json; charset=utf-8',
		'txt' => 'text/plain; charset=utf-8',
		'xml' => 'application/xml; charset=utf-8',
		'html' => 'text/html; charset=utf-8',
		'svg' => 'image/svg+xml',
		'png' => 'image/png',
		'jpg' => 'image/jpeg',
		'jpeg' => 'image/jpeg',
		'gif' => 'image/gif',
		'webp' => 'image/webp',
		'avif' => 'image/avif',
		'ico' => 'image/x-icon',
		'woff' => 'font/woff',
		'woff2' => 'font/woff2',
		'ttf' => 'font/ttf',
		'otf' => 'font/otf',
		'mp4' => 'video/mp4',
		'webm' => 'video/webm',
		'mp3' => 'audio/mpeg',
		'wav' => 'audio/wav',
		'pdf' => 'application/pdf',
		'zip' => 'application/zip',
	];

	$ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
	if (isset($types[$ext])) {
		return $types[$ext];
	}

	$mime = function_exists('mime_content_type')
		? mime_content_type($file)
		: false;
	return $mime ?: 'application/octet-stream';
}

/**
 * Coba sajikan file dari demo/. Return true bila sudah di-serve (script berhenti),
 * false bila URI ini bukan milik demo/ (biarkan jadi 404).
 */
function demo_serve(string $uri): bool {
	if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'GET') {
		return false;
	}

	$root = realpath(ROOT . '/demo');
	if ($root === false) {
		return false;
	}

	$rel = trim($uri, '/');

	// Dukung akses langsung /demo/barbershop/... selain /barbershop/...
	if (str_starts_with($rel, 'demo/')) {
		$rel = substr($rel, strlen('demo/'));
	}
	if ($rel === '' || $rel === 'demo') {
		return false;
	}

	$target = realpath($root . '/' . $rel);
	if ($target === false) {
		return false;
	}

	// realpath sudah resolve ../ dan symlink — tolak kalau keluar dari demo/
	if (!str_starts_with($target, $root . DIRECTORY_SEPARATOR)) {
		return false;
	}

	if (is_dir($target)) {
		$target .= '/index.html';
	}
	if (!is_file($target)) {
		return false;
	}

	// Jangan bocorkan source PHP bila ada file .php ikut ter-upload
	if (strtolower(pathinfo($target, PATHINFO_EXTENSION)) === 'php') {
		return false;
	}

	header('Content-Type: ' . demo_content_type($target));
	readfile($target);
	exit();
}

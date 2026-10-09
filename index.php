<?php

// Entry point dari root — tetap bisa buka aplikasi tanpa argumen `-t public`
// Usage: php -S localhost:8080            (docroot = root, file statis di-serve manual)
//        php -S localhost:8080 -t public  (docroot = public/, lewat public/index.php)

/**
 * Content-Type untuk file statis di public/ (berbasis ekstensi,
 * karena mime_content_type sering salah untuk css/ico).
 */
function static_content_type(string $file): string {
	$types = [
		'css' => 'text/css; charset=utf-8',
		'js' => 'application/javascript; charset=utf-8',
		'mjs' => 'application/javascript; charset=utf-8',
		'json' => 'application/json; charset=utf-8',
		'map' => 'application/json; charset=utf-8',
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

if (PHP_SAPI === 'cli-server') {
	$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
	$file = __DIR__ . '/public' . $uri;

	// Sajikan file statis dari public/ — kecuali file PHP (jangan bocorkan source)
	if (
		$uri !== '/' &&
		is_file($file) &&
		strtolower(pathinfo($file, PATHINFO_EXTENSION)) !== 'php'
	) {
		header('Content-Type: ' . static_content_type($file));
		readfile($file);
		exit();
	}
}

require __DIR__ . '/public/bootstrap.php';

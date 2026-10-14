<?php

/**
 * Loader .env sederhana (tanpa dependensi).
 * Dipakai untuk konfigurasi seperti kredensial admin & path database.
 */

function env(string $key, $default = null) {
	static $vars = null;

	if ($vars === null) {
		$vars = [];
		$file = (defined('ROOT') ? ROOT : dirname(__DIR__)) . '/.env';

		if (is_readable($file)) {
			foreach (
				file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)
				as $line
			) {
				$line = trim($line);
				if (
					$line === '' ||
					$line[0] === '#' ||
					strpos($line, '=') === false
				) {
					continue;
				}

				[$name, $value] = explode('=', $line, 2);
				$name = trim($name);
				$value = trim($value);

				// Buang kutip
				if (
					$value !== '' &&
					($value[0] === '"' || $value[0] === "'") &&
					substr($value, -1) === $value[0]
				) {
					$value = substr($value, 1, -1);
				}

				$vars[$name] = $value;
			}
		}
	}

	if (array_key_exists($key, $vars) && $vars[$key] !== '') {
		return $vars[$key];
	}

	$fromEnv = getenv($key);
	if ($fromEnv !== false && $fromEnv !== '') {
		return $fromEnv;
	}

	return $default;
}

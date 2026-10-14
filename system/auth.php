<?php

/**
 * Autentikasi admin sederhana berbasis session + token CSRF.
 * Kredensial diatur di .env (ADMIN_USER / ADMIN_PASS), default: admin / admin123
 */

function auth_boot(): void {
	if (session_status() !== PHP_SESSION_ACTIVE) {
		session_name('dop_admin');
		session_start([
			'cookie_httponly' => true,
			'cookie_samesite' => 'Lax',
		]);
	}
}

function auth_check(): bool {
	auth_boot();
	return !empty($_SESSION['admin_user']);
}

function auth_attempt(string $user, string $pass): bool {
	$validUser = (string) env('ADMIN_USER', 'admin');
	$validPass = (string) env('ADMIN_PASS', 'admin123');

	return hash_equals($validUser, $user) && hash_equals($validPass, $pass);
}

function auth_login(string $user): void {
	auth_boot();
	session_regenerate_id(true);
	$_SESSION['admin_user'] = $user;
}

function auth_logout(): void {
	auth_boot();
	$_SESSION = [];
	if (ini_get('session.use_cookies')) {
		$cookie = session_get_cookie_params();
		setcookie(
			session_name(),
			'',
			time() - 42000,
			$cookie['path'],
			$cookie['domain'],
			$cookie['secure'],
			$cookie['httponly'],
		);
	}
	session_destroy();
}

function auth_user(): ?string {
	auth_boot();
	return $_SESSION['admin_user'] ?? null;
}

/** Guard halaman admin: redirect ke login bila belum auth. */
function require_admin(): void {
	if (!auth_check()) {
		header('Location: /admin/login');
		exit();
	}
}

function csrf_token(): string {
	auth_boot();
	if (empty($_SESSION['csrf_token'])) {
		$_SESSION['csrf_token'] = bin2hex(random_bytes(32));
	}
	return $_SESSION['csrf_token'];
}

function csrf_field(): string {
	return '<input type="hidden" name="_token" value="' .
		htmlspecialchars(csrf_token(), ENT_QUOTES) .
		'">';
}

/** Verifikasi token CSRF — hentikan request bila tidak valid. */
function csrf_verify(): void {
	$token = $_POST['_token'] ?? '';
	if (!is_string($token) || !hash_equals(csrf_token(), $token)) {
		http_response_code(419);
		die('CSRF token tidak valid. Muat ulang halaman dan coba lagi.');
	}
}

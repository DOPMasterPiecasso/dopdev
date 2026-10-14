<?php

/**
 * Login admin — POST /admin/login
 */

if (auth_check()) {
	header('Location: /admin');
	exit();
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	csrf_verify();

	$user = trim((string) ($_POST['username'] ?? ''));
	$pass = (string) ($_POST['password'] ?? '');

	if (auth_attempt($user, $pass)) {
		auth_login($user);
		header('Location: /admin');
		exit();
	}

	$error = 'Username atau password salah.';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = 'Admin Login';
    include 'partials/title-meta.php';
    ?>
    <base href="/">
    <?php include 'partials/head-css.php'; ?>
</head>

<body class="bg-default-100">

    <div class="min-h-screen flex items-center justify-center px-5 py-15">
        <div class="w-full max-w-100 bg-white rounded-xl border border-default-200 shadow-xs p-8">
            <div class="text-center mb-8">
                <img src="/logo/logodopputih.webp" alt="DOP" class="h-12 w-12 rounded-lg object-cover mx-auto mb-4">
                <h1 class="text-2xl">Admin Login</h1>
                <p class="text-sm text-default-500 mt-1">Kelola artikel blog DOP</p>
            </div>

            <?php if ($error !== ''): ?>
            <div class="mb-5 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                <?php echo htmlspecialchars($error, ENT_QUOTES); ?>
            </div>
            <?php endif; ?>

            <form method="post" action="/admin/login" class="space-y-5">
                <?php echo csrf_field(); ?>

                <div>
                    <label for="username" class="block text-sm font-medium text-default-700 mb-1.5">Username</label>
                    <input type="text" id="username" name="username" required autocomplete="username"
                        class="w-full rounded-lg border-default-200 focus:border-primary focus:ring-primary text-sm"
                        value="<?php echo htmlspecialchars(
                        	$_POST['username'] ?? '',
                        	ENT_QUOTES,
                        ); ?>">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-default-700 mb-1.5">Password</label>
                    <input type="password" id="password" name="password" required autocomplete="current-password"
                        class="w-full rounded-lg border-default-200 focus:border-primary focus:ring-primary text-sm">
                </div>

                <button type="submit" class="w-full py-3 px-5 rounded-lg bg-primary text-white text-sm font-medium hover:opacity-90 transition-all">
                    Masuk
                </button>
            </form>

            <p class="mt-6 text-center text-xs text-default-400">
                Default: admin / admin123 — ubah lewat <code class="px-1 rounded bg-default-100">ADMIN_USER</code> &amp; <code class="px-1 rounded bg-default-100">ADMIN_PASS</code> di .env
            </p>
        </div>
    </div>

</body>

</html>

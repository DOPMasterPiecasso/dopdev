<?php

$dispatcher = FastRoute\simpleDispatcher(function (
	FastRoute\RouteCollector $r
) {
	$r->addRoute('GET', '/', function ($ROUTE_PARAMS) {
		include 'pages/index.php';
	});
	$r->addRoute('GET', '/about', function ($ROUTE_PARAMS) {
		include 'pages/about.php';
	});
	$r->addRoute('GET', '/blog-details', function ($ROUTE_PARAMS) {
		include 'pages/blog-details.php';
	});
	$r->addRoute('GET', '/blog-details/{slug}', function ($ROUTE_PARAMS) {
		$_GET['post'] = $ROUTE_PARAMS['slug'] ?? '';
		include 'pages/blog-details.php';
	});
	$r->addRoute('GET', '/blog', function ($ROUTE_PARAMS) {
		include 'pages/blog.php';
	});
	$r->addRoute('GET', '/case-studies', function ($ROUTE_PARAMS) {
		include 'pages/case-studies.php';
	});
	$r->addRoute('GET', '/case-study', function ($ROUTE_PARAMS) {
		include 'pages/case-study.php';
	});
	$r->addRoute('GET', '/case-study/{slug}', function ($ROUTE_PARAMS) {
		if (isset($ROUTE_PARAMS['slug'])) {
			$_GET['case'] = $ROUTE_PARAMS['slug'];
		}
		include 'pages/case-study.php';
	});
	$r->addRoute('GET', '/contact', function ($ROUTE_PARAMS) {
		include 'pages/contact.php';
	});
	$r->addRoute('GET', '/error-401', function ($ROUTE_PARAMS) {
		include 'pages/error-401.php';
	});
	$r->addRoute('GET', '/error-404', function ($ROUTE_PARAMS) {
		include 'pages/error-404.php';
	});
	$r->addRoute('GET', '/faqs', function ($ROUTE_PARAMS) {
		include 'pages/faqs.php';
	});
	$r->addRoute('GET', '/feature', function ($ROUTE_PARAMS) {
		include 'pages/feature.php';
	});
	$r->addRoute('GET', '/service-detail', function ($ROUTE_PARAMS) {
		include 'pages/service-detail.php';
	});
	$r->addRoute('GET', '/service-detail/{slug}', function ($ROUTE_PARAMS) {
		if (isset($ROUTE_PARAMS['slug'])) {
			$_GET['service'] = $ROUTE_PARAMS['slug'];
		}
		include 'pages/service-detail.php';
	});

	// ---- Admin (dashboard artikel blog) ----
	$r->addRoute('GET', '/admin', function ($ROUTE_PARAMS) {
		include 'pages/admin/dashboard.php';
	});
	$r->addRoute(['GET', 'POST'], '/admin/login', function ($ROUTE_PARAMS) {
		include 'pages/admin/login.php';
	});
	$r->addRoute('GET', '/admin/logout', function ($ROUTE_PARAMS) {
		auth_logout();
		header('Location: /admin/login');
		exit();
	});
	$r->addRoute('GET', '/admin/posts/create', function ($ROUTE_PARAMS) {
		$post = null;
		include 'pages/admin/post-form.php';
	});
	$r->addRoute('POST', '/admin/posts', function ($ROUTE_PARAMS) {
		$post = null;
		include 'pages/admin/post-form.php';
	});
	$r->addRoute('GET', '/admin/posts/{id}/edit', function ($ROUTE_PARAMS) {
		$post = blog_find((int) ($ROUTE_PARAMS['id'] ?? 0));
		if (!$post) {
			header('Location: /admin');
			exit();
		}
		include 'pages/admin/post-form.php';
	});
	$r->addRoute('POST', '/admin/posts/{id}', function ($ROUTE_PARAMS) {
		$post = blog_find((int) ($ROUTE_PARAMS['id'] ?? 0));
		if (!$post) {
			header('Location: /admin');
			exit();
		}
		include 'pages/admin/post-form.php';
	});
	$r->addRoute('POST', '/admin/posts/{id}/delete', function ($ROUTE_PARAMS) {
		include 'pages/admin/dashboard.php';
	});
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== ($pos = strpos($uri, '?'))) {
	$uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

// Auto-route demo folder (e.g. /barber or /barber/ -> demo/barber/index.html, or /barber/style.css -> demo/barber/style.css)
$trimmedUri = trim($uri, '/');
if ($trimmedUri !== '') {
	$pathSegments = explode('/', $trimmedUri);
	$demoSlug = $pathSegments[0];
	$subPath = implode('/', array_slice($pathSegments, 1));
	$demoDir = ROOT . '/demo/' . $demoSlug;

	if (is_dir($demoDir)) {
		// Pastikan trailing slash untuk folder root demo agar relative path (seperti img/...) resolve dengan benar
		if ($subPath === '' && !str_ends_with($uri, '/')) {
			header('Location: ' . $uri . '/' . (isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] !== '' ? '?' . $_SERVER['QUERY_STRING'] : ''), true, 301);
			exit();
		}

		$targetPath = $subPath === '' ? $demoDir . '/index.html' : $demoDir . '/' . $subPath;
		if (is_dir($targetPath) && file_exists($targetPath . '/index.html')) {
			$targetPath .= '/index.html';
		}

		if (is_file($targetPath)) {
			if (function_exists('static_content_type')) {
				header('Content-Type: ' . static_content_type($targetPath));
			} else {
				$ext = strtolower(pathinfo($targetPath, PATHINFO_EXTENSION));
				$mimeTypes = [
					'html' => 'text/html; charset=utf-8',
					'css'  => 'text/css; charset=utf-8',
					'js'   => 'application/javascript; charset=utf-8',
					'png'  => 'image/png',
					'jpg'  => 'image/jpeg',
					'jpeg' => 'image/jpeg',
					'gif'  => 'image/gif',
					'svg'  => 'image/svg+xml',
					'webp' => 'image/webp',
					'json' => 'application/json; charset=utf-8',
					'woff' => 'font/woff',
					'woff2'=> 'font/woff2',
					'ttf'  => 'font/ttf',
				];
				header('Content-Type: ' . ($mimeTypes[$ext] ?? 'application/octet-stream'));
			}
			readfile($targetPath);
			exit();
		}
	}
}

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
	case FastRoute\Dispatcher::NOT_FOUND:
		http_response_code(404);
		die('Not found...');
		break;
	case FastRoute\Dispatcher::FOUND:
		$routeInfo[1]($routeInfo[2]);
		break;
}

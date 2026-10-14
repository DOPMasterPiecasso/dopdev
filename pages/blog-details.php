<?php

/**
 * Detail postingan blog — data dari tabel blog_posts.
 * Route: /blog-details/{slug} (dan fallback /blog-details -> artikel terbaru)
 */

$slug = isset($_GET['post']) ? (string) $_GET['post'] : '';
$post = $slug !== '' ? blog_find_published($slug) : blog_latest();

if (!$post) {
	http_response_code(404);
	$title = 'Article Not Found';
	include 'pages/error-404.php';
	return;
}

$related = blog_related($post['slug'], $post['category']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = $post['title'];
    include 'partials/title-meta.php';
    ?>
    <base href="/">
    <?php include 'partials/head-css.php'; ?>
</head>

<body>

    <?php include 'partials/navbar.php'; ?>

    <section class="relative size-full overflow-hidden md:py-14.5 py-10">

        <div class="container max-w-245!">
            <div class="mb-7.5 space-y-7.5 text-center">
                <p>
                    <?php echo $post['published_at']
                    	? date('F j, Y', strtotime($post['published_at']))
                    	: ''; ?>
                    <?php if ($post['category'] !== ''): ?>
                    <span class="px-2 py-1 ml-2 border border-default-200 rounded-md text-xs font-medium text-default-500"><?php echo htmlspecialchars(
                    	$post['category'],
                    	ENT_QUOTES,
                    ); ?></span>
                    <?php endif; ?>
                </p>

                <h1 class="md:text-[56px] text-5xl leading-[1.2em] text-default-950">
                    <?php echo htmlspecialchars($post['title'], ENT_QUOTES); ?>
                </h1>

                <?php if ($post['excerpt'] !== ''): ?>
                <p class="md:max-w-3/5 mx-auto"><?php echo htmlspecialchars(
                	$post['excerpt'],
                	ENT_QUOTES,
                ); ?></p>
                <?php endif; ?>

                <?php if ($post['author'] !== ''): ?>
                <p class="text-sm text-default-500">By <?php echo htmlspecialchars(
                	$post['author'],
                	ENT_QUOTES,
                ); ?></p>
                <?php endif; ?>
            </div>

            <?php if ($post['cover_image'] !== ''): ?>
            <div class="lg:-mx-15">
                <img src="<?php echo htmlspecialchars(
                	$post['cover_image'],
                	ENT_QUOTES,
                ); ?>" alt="<?php echo htmlspecialchars(
	$post['title'],
	ENT_QUOTES,
); ?>" class="rounded-lg size-full mb-12.5 object-cover max-h-140 w-full">
            </div>
            <?php endif; ?>

            <?php echo $post['content']; ?>

            <div class="mt-12.5 pt-8 border-t border-default-200">
                <a href="/blog" class="inline-flex items-center gap-2 text-base font-medium text-primary transition-colors hover:underline">
                    <i class="iconify tabler--arrow-left size-5"></i>
                    Kembali ke Blog
                </a>
            </div>
        </div>
    </section>

    <?php if (count($related) > 0): ?>
    <section class="lg:py-27.5 md:py-25 py-15">
        <div class="container">

            <div class="text-center gap-4 mb-5 md:mb-7.5 lg:mb-15">
                <h2 class="lg:text-[44px] text-4xl">Other Blogs</h2>
            </div>

            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-7.5 mb-10">
                <?php foreach ($related as $item): ?>
                <div class="relative rounded-lg overflow-hidden group bg-default-100 p-2">
                    <a href="blog-details?post=<?php echo urlencode(
                    	$item['slug'],
                    ); ?>" class="absolute inset-0 z-10"></a>

                    <div class="overflow-hidden rounded">
                        <img src="<?php echo htmlspecialchars(
                        	$item['cover_image'] !== ''
                        		? $item['cover_image']
                        		: 'images/blog/2.webp',
                        	ENT_QUOTES,
                        ); ?>" alt="<?php echo htmlspecialchars(
	$item['title'],
	ENT_QUOTES,
); ?>" class="size-full aspect-[4/3] rounded object-cover group-hover:scale-105 transition-all duration-300">
                    </div>

                    <div class="flex items-end justify-between gap-5 p-4">
                        <div>
                            <div class="flex items-center gap-3 text-default-500 mb-3">
                                <span class="px-2 py-1 border border-default-200 rounded-md text-xs font-medium"><?php echo htmlspecialchars(
                                	$item['category'],
                                	ENT_QUOTES,
                                ); ?></span>
                                <span class="text-sm"><?php echo $item[
                                	'published_at'
                                ]
                                	? date(
                                		'F j, Y',
                                		strtotime($item['published_at']),
                                	)
                                	: ''; ?></span>
                            </div>

                            <h3 class="text-xl"><?php echo htmlspecialchars(
                            	$item['title'],
                            	ENT_QUOTES,
                            ); ?></h3>
                        </div>

                        <div class="grow">
                            <i class="iconify tabler--arrow-narrow-right size-6 -rotate-45 group-hover:rotate-0 transition duration-300"></i>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>
    <?php endif; ?>

    <?php include 'partials/footer.php'; ?>

</body>

</html>

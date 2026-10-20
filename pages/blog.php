<?php

/**
 * Blog page: list of posts from database (blog_posts).
 * Filter kategori via ?cat=, pagination via ?page=
 */

$page = max(1, (int) ($_GET['page'] ?? 1));
$activeCategory = trim((string) ($_GET['cat'] ?? ''));
$categories = blog_categories();

if ($activeCategory !== '' && !in_array($activeCategory, $categories, true)) {
	$activeCategory = '';
}

$result = blog_list($page, BLOG_PER_PAGE, $activeCategory);
$posts = $result['posts'];
$totalPosts = $result['total'];
$totalPages = max(1, (int) ceil($totalPosts / BLOG_PER_PAGE));

// Bila ?page= melebihi total halaman, kembalikan ke halaman terakhir
if ($page > $totalPages) {
	$page = $totalPages;
	$result = blog_list($page, BLOG_PER_PAGE, $activeCategory);
	$posts = $result['posts'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = 'Blog';
    include 'partials/title-meta.php';
    ?>

    <?php include 'partials/head-css.php'; ?>
</head>

<body>

    <?php include 'partials/navbar.php'; ?>

    <section class="relative size-full overflow-hidden md:py-14.5 py-10">
        <div class="container">
            <div class="mb-12.5 text-center">
                <h1 class="lg:text-[56px] md:text-5xl text-4xl mb-2.5">Blog</h1>
                <p class="text-default-600 max-w-2xl mx-auto text-base">
                    Practical insights from real booking systems we shipped for barbershops, clinics, salons and studios across Singapore and Australia.
                </p>
            </div>

            <?php if (count($categories) > 0): ?>
            <div class="flex flex-wrap justify-center gap-2 mb-12.5">
                <a href="/blog" class="py-2 px-4 text-sm font-medium rounded-lg transition-all <?php echo $activeCategory ===
                ''
                	? 'bg-primary text-white'
                	: 'text-default-700 hover:text-default-950 hover:bg-default-100'; ?>">
                    All
                </a>
                <?php foreach ($categories as $category): ?>
                <a href="/blog?cat=<?php echo urlencode(
                	$category,
                ); ?>" class="py-2 px-4 text-sm font-medium rounded-lg transition-all <?php echo $activeCategory ===
$category
	? 'bg-primary text-white'
	: 'text-default-700 hover:text-default-950 hover:bg-default-100'; ?>">
                    <?php echo htmlspecialchars($category, ENT_QUOTES); ?>
                </a>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <?php if (count($posts) === 0): ?>
            <div class="py-20 text-center">
                <p class="text-default-600 mb-5">No articles found<?php echo $activeCategory !==
                ''
                	? ' in this category'
                	: ''; ?>.</p>
                <a href="/blog" class="inline-flex items-center justify-center py-4.5 px-10 bg-primary rounded-lg text-white text-base font-medium transition-all">View all articles</a>
            </div>
            <?php else: ?>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-7.5">
                <?php foreach ($posts as $post): ?>
                <div class="relative rounded-lg overflow-hidden group bg-default-100 p-2">
                    <a href="blog-details?post=<?php echo urlencode(
                    	$post['slug'],
                    ); ?>" class="absolute inset-0 z-10"></a>

                    <div class="overflow-hidden rounded">
                        <img src="<?php echo htmlspecialchars(
                        	$post['cover_image'] !== ''
                        		? $post['cover_image']
                        		: 'images/blog/1.webp',
                        	ENT_QUOTES,
                        ); ?>" alt="<?php echo htmlspecialchars(
	$post['title'],
	ENT_QUOTES,
); ?>" class="size-full aspect-[4/3] rounded object-cover group-hover:scale-105 transition-all duration-300">
                    </div>

                    <div class="flex items-end justify-between gap-5 p-4">
                        <div>
                            <div class="flex items-center gap-3 text-default-500 mb-3">
                                <span class="px-2 py-1 border border-default-200 rounded-md text-xs font-medium"><?php echo htmlspecialchars(
                                	$post['category'],
                                	ENT_QUOTES,
                                ); ?></span>
                                <span class="text-sm"><?php echo $post[
                                	'published_at'
                                ]
                                	? date(
                                		'F j, Y',
                                		strtotime($post['published_at']),
                                	)
                                	: ''; ?></span>
                            </div>

                            <h3 class="text-xl"><?php echo htmlspecialchars(
                            	$post['title'],
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

            <?php if ($totalPages > 1): ?>
            <nav class="mt-12.5 grid grid-cols-3 items-center md:gap-10 gap-5">
                <div>
                    <?php if ($page > 1): ?>
                    <a href="<?php echo blog_page_url(
                    	$page - 1,
                    	$activeCategory,
                    ); ?>" class="flex items-center justify-center gap-2 w-full text-center py-4.5 px-10 bg-primary rounded-lg text-white transition-all text-base font-medium hover:opacity-90">
                        <i class="iconify tabler--chevron-left"></i>
                        Previous
                    </a>
                    <?php else: ?>
                    <span class="opacity-0 flex items-center justify-center gap-2 w-full text-center py-4.5 px-10 rounded-lg text-base font-medium select-none">
                        Previous
                    </span>
                    <?php endif; ?>
                </div>

                <div class="text-center"><?php echo $page; ?> / <?php echo $totalPages; ?></div>

                <div>
                    <?php if ($page < $totalPages): ?>
                    <a href="<?php echo blog_page_url(
                    	$page + 1,
                    	$activeCategory,
                    ); ?>" class="flex items-center justify-center gap-2 w-full text-center py-4.5 px-10 bg-primary rounded-lg text-white transition-all text-base font-medium hover:opacity-90">
                        Next
                        <i class="iconify tabler--chevron-right"></i>
                    </a>
                    <?php else: ?>
                    <span class="opacity-0 flex items-center justify-center gap-2 w-full text-center py-4.5 px-10 rounded-lg text-base font-medium select-none">
                        Next
                    </span>
                    <?php endif; ?>
                </div>
            </nav>
            <?php endif; ?>

            <p class="mt-6 text-center text-sm text-default-500">
                <?php echo $totalPosts; ?> artikel<?php echo $activeCategory !==
 ''
 	? ' di kategori ' . htmlspecialchars($activeCategory, ENT_QUOTES)
 	: ''; ?>
            </p>
            <?php endif; ?>
        </div>
    </section>

    <?php include 'partials/footer.php'; ?>

</body>

</html>

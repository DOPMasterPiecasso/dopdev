<?php

/**
 * Admin: form create / edit artikel.
 * GET  /admin/posts/create
 * GET  /admin/posts/{id}/edit
 * POST /admin/posts            (create)
 * POST /admin/posts/{id}       (update)
 */

require_admin();

$activeNav = 'create';
$isEdit = isset($post) && $post !== null;
$values = $isEdit
	? $post
	: [
		'title' => '',
		'slug' => '',
		'excerpt' => '',
		'content' => '',
		'category' => '',
		'cover_image' => '',
		'author' => 'DOP Team',
		'status' => 'draft',
		'published_at' => '',
	];

// datetime-local butuh format Y-m-dTH:i
if ($isEdit && !empty($values['published_at'])) {
	$values['published_at'] = str_replace(
		' ',
		'T',
		substr($values['published_at'], 0, 16),
	);
}

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	csrf_verify();

	$input = [
		'title' => trim((string) ($_POST['title'] ?? '')),
		'slug' => trim((string) ($_POST['slug'] ?? '')),
		'excerpt' => trim((string) ($_POST['excerpt'] ?? '')),
		'content' => (string) ($_POST['content'] ?? ''),
		'category' => trim((string) ($_POST['category'] ?? '')),
		'cover_image' => trim((string) ($_POST['cover_image'] ?? '')),
		'author' => trim((string) ($_POST['author'] ?? '')),
		'status' => (string) ($_POST['status'] ?? 'draft'),
		'published_at' => trim((string) ($_POST['published_at'] ?? '')),
	];
	$values = $input;

	if ($input['title'] === '') {
		$errors[] = 'Judul wajib diisi.';
	}
	if ($input['excerpt'] === '') {
		$errors[] = 'Excerpt (ringkasan) wajib diisi.';
	}
	if ($input['content'] === '') {
		$errors[] = 'Konten artikel wajib diisi.';
	}

	if (count($errors) === 0) {
		if ($isEdit) {
			blog_update((int) $post['id'], $input);
			header(
				'Location: /admin/posts/' . (int) $post['id'] . '/edit?saved=1',
			);
			exit();
		}

		$id = blog_create($input);
		header('Location: /admin/posts/' . $id . '/edit?created=1');
		exit();
	}
}

$categories = blog_categories();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = $isEdit ? 'Edit Artikel' : 'Tulis Artikel';
    include 'partials/title-meta.php';
    ?>
    <base href="/">
    <?php include 'partials/head-css.php'; ?>
</head>

<body class="bg-default-100">

    <?php include 'partials/admin-topbar.php'; ?>

    <div class="container py-10">
        <div class="max-w-300 mx-auto">

            <div class="flex flex-wrap items-center justify-between gap-4 mb-8">
                <div>
                    <a href="/admin" class="text-sm text-default-500 hover:text-primary transition-colors">&larr; Kembali ke daftar artikel</a>
                    <h1 class="text-3xl mt-2"><?php echo $isEdit
                    	? 'Edit Artikel'
                    	: 'Tulis Artikel Baru'; ?></h1>
                </div>
                <?php if ($isEdit): ?>
                <a href="/blog-details?post=<?php echo urlencode(
                	$post['slug'],
                ); ?>" target="_blank" rel="noopener"
                    class="py-2.5 px-5 rounded-lg border border-default-200 bg-white text-sm font-medium text-default-800 hover:bg-default-50 transition-all">
                    Preview
                </a>
                <?php endif; ?>
            </div>

            <?php if (isset($_GET['saved'])): ?>
            <div class="mb-6 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
                Perubahan tersimpan.
            </div>
            <?php endif; ?>
            <?php if (isset($_GET['created'])): ?>
            <div class="mb-6 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
                Artikel dibuat. <?php if (
                	$values['status'] === 'draft'
                ): ?>Saat ini masih draft — ubah status ke Published agar tampil di blog.<?php endif; ?>
            </div>
            <?php endif; ?>

            <?php if (count($errors) > 0): ?>
            <div class="mb-6 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                <ul class="list-disc list-inside space-y-1">
                    <?php foreach ($errors as $error): ?>
                    <li><?php echo htmlspecialchars($error, ENT_QUOTES); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>

            <form method="post" action="<?php echo $isEdit
            	? '/admin/posts/' . (int) $post['id']
            	: '/admin/posts'; ?>" class="space-y-6">
                <?php echo csrf_field(); ?>

                <div class="rounded-xl border border-default-200 bg-white p-6 space-y-5">
                    <div>
                        <label for="title" class="block text-sm font-medium text-default-700 mb-1.5">Judul *</label>
                        <input type="text" id="title" name="title" required
                            class="w-full rounded-lg border-default-200 focus:border-primary focus:ring-primary"
                            value="<?php echo htmlspecialchars(
                            	$values['title'],
                            	ENT_QUOTES,
                            ); ?>">
                    </div>

                    <div class="grid sm:grid-cols-2 gap-5">
                        <div>
                            <label for="slug" class="block text-sm font-medium text-default-700 mb-1.5">Slug (URL)</label>
                            <input type="text" id="slug" name="slug" data-auto-slug-from="title"
                                class="w-full rounded-lg border-default-200 focus:border-primary focus:ring-primary font-mono text-sm"
                                placeholder="otomatis dari judul"
                                value="<?php echo htmlspecialchars(
                                	$values['slug'],
                                	ENT_QUOTES,
                                ); ?>">
                            <p class="mt-1.5 text-xs text-default-400">URL: /blog-details?post=<span data-slug-preview>…</span></p>
                        </div>

                        <div>
                            <label for="category" class="block text-sm font-medium text-default-700 mb-1.5">Kategori</label>
                            <input type="text" id="category" name="category" list="category-list"
                                class="w-full rounded-lg border-default-200 focus:border-primary focus:ring-primary"
                                placeholder="Mis. Landing Page"
                                value="<?php echo htmlspecialchars(
                                	$values['category'],
                                	ENT_QUOTES,
                                ); ?>">
                            <datalist id="category-list">
                                <?php foreach ($categories as $category): ?>
                                <option value="<?php echo htmlspecialchars(
                                	$category,
                                	ENT_QUOTES,
                                ); ?>"></option>
                                <?php endforeach; ?>
                            </datalist>
                        </div>
                    </div>

                    <div>
                        <label for="excerpt" class="block text-sm font-medium text-default-700 mb-1.5">Excerpt / Ringkasan *</label>
                        <textarea id="excerpt" name="excerpt" rows="2" required
                            class="w-full rounded-lg border-default-200 focus:border-primary focus:ring-primary"
                            placeholder="Kalimat singkat yang tampil di kartu blog"><?php echo htmlspecialchars(
                            	$values['excerpt'],
                            	ENT_QUOTES,
                            ); ?></textarea>
                    </div>
                </div>

                <div class="rounded-xl border border-default-200 bg-white p-6 space-y-5">
                    <div>
                        <label for="content" class="block text-sm font-medium text-default-700 mb-1.5">Konten (HTML) *</label>
                        <textarea id="content" name="content" rows="18" required
                            class="w-full rounded-lg border-default-200 focus:border-primary focus:ring-primary font-mono text-sm"
                            placeholder="<p class=&quot;mb-12.5&quot;>…</p><h2 class=&quot;text-[32px] mb-2.5&quot;>Judul section</h2>"><?php echo htmlspecialchars(
                            	$values['content'],
                            	ENT_QUOTES,
                            ); ?></textarea>
                        <p class="mt-1.5 text-xs text-default-400">
                            HTML yang sama dengan template blog:
                            <code class="px-1 rounded bg-default-100">h2.text-[32px] mb-2.5</code>,
                            <code class="px-1 rounded bg-default-100">p.mb-12.5</code>,
                            <code class="px-1 rounded bg-default-100">ul.list-disc …</code>,
                            <code class="px-1 rounded bg-default-100">blockquote.bg-default-950 …</code>
                        </p>
                    </div>
                </div>

                <div class="rounded-xl border border-default-200 bg-white p-6 space-y-5">
                    <div class="grid sm:grid-cols-2 gap-5">
                        <div>
                            <label for="cover_image" class="block text-sm font-medium text-default-700 mb-1.5">Gambar Sampul</label>
                            <input type="text" id="cover_image" name="cover_image"
                                class="w-full rounded-lg border-default-200 focus:border-primary focus:ring-primary text-sm"
                                placeholder="images/blog/1.webp atau https://…"
                                value="<?php echo htmlspecialchars(
                                	$values['cover_image'],
                                	ENT_QUOTES,
                                ); ?>">
                            <p class="mt-1.5 text-xs text-default-400">Path relatif (public/) atau URL gambar.</p>
                        </div>

                        <div>
                            <label for="author" class="block text-sm font-medium text-default-700 mb-1.5">Penulis</label>
                            <input type="text" id="author" name="author"
                                class="w-full rounded-lg border-default-200 focus:border-primary focus:ring-primary text-sm"
                                value="<?php echo htmlspecialchars(
                                	$values['author'],
                                	ENT_QUOTES,
                                ); ?>">
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-5">
                        <div>
                            <label for="status" class="block text-sm font-medium text-default-700 mb-1.5">Status</label>
                            <select id="status" name="status" class="w-full rounded-lg border-default-200 focus:border-primary focus:ring-primary text-sm">
                                <option value="draft" <?php echo $values[
                                	'status'
                                ] === 'draft'
                                	? 'selected'
                                	: ''; ?>>Draft</option>
                                <option value="published" <?php echo $values[
                                	'status'
                                ] === 'published'
                                	? 'selected'
                                	: ''; ?>>Published</option>
                            </select>
                        </div>

                        <div>
                            <label for="published_at" class="block text-sm font-medium text-default-700 mb-1.5">Tanggal Terbit</label>
                            <input type="datetime-local" id="published_at" name="published_at"
                                class="w-full rounded-lg border-default-200 focus:border-primary focus:ring-primary text-sm"
                                value="<?php echo htmlspecialchars(
                                	$values['published_at'],
                                	ENT_QUOTES,
                                ); ?>">
                            <p class="mt-1.5 text-xs text-default-400">Kosongkan = otomatis saat dipublish.</p>
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <button type="submit" class="py-3 px-8 rounded-lg bg-primary text-white text-sm font-medium hover:opacity-90 transition-all">
                        <?php echo $isEdit
                        	? 'Simpan Perubahan'
                        	: 'Publikasikan Artikel'; ?>
                    </button>
                    <a href="/admin" class="py-3 px-6 rounded-lg border border-default-200 bg-white text-sm font-medium text-default-700 hover:bg-default-50 transition-all">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>

    <script>
        (function() {
            var slugify = function(text) {
                return text.toLowerCase().trim()
                    .replace(/[^a-z0-9]+/g, '-')
                    .replace(/^-+|-+$/g, '');
            };

            var title = document.getElementById('title');
            var slug = document.getElementById('slug');
            var preview = document.querySelector('[data-slug-preview]');
            var dirty = slug.value !== '';

            slug.addEventListener('input', function() { dirty = slug.value !== ''; });
            title.addEventListener('input', function() {
                if (!dirty) slug.value = slugify(title.value);
                if (preview) preview.textContent = slug.value || '…';
            });
            if (preview) preview.textContent = slug.value || '…';
        })();
    </script>

</body>

</html>

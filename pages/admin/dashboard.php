<?php

/**
 * Admin: daftar artikel + statistik + aksi hapus.
 * GET  /admin
 * POST /admin/posts/{id}/delete
 */

require_admin();

$activeNav = 'posts';

// Aksi hapus
if (
	$_SERVER['REQUEST_METHOD'] === 'POST' &&
	isset($_POST['action']) &&
	$_POST['action'] === 'delete'
) {
	csrf_verify();
	$id = (int) ($_POST['id'] ?? 0);
	if (blog_find($id)) {
		blog_delete($id);
	}
	header('Location: /admin?deleted=' . $id);
	exit();
}

// Filter
$status = trim((string) ($_GET['status'] ?? ''));
if (!in_array($status, ['draft', 'published'], true)) {
	$status = '';
}
$q = trim((string) ($_GET['q'] ?? ''));

$where = '1=1';
$params = [];
if ($status !== '') {
	$where .= ' AND status = ?';
	$params[] = $status;
}
if ($q !== '') {
	$where .= ' AND (title LIKE ? OR category LIKE ?)';
	$params[] = '%' . $q . '%';
	$params[] = '%' . $q . '%';
}

$posts = db_all(
	"SELECT * FROM blog_posts WHERE $where ORDER BY COALESCE(published_at, created_at) DESC, id DESC",
	$params,
);

$stats = blog_stats();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = 'Admin — Artikel';
    include 'partials/title-meta.php';
    ?>
    <base href="/">
    <?php include 'partials/head-css.php'; ?>
</head>

<body class="bg-default-100">

    <?php include 'partials/admin-topbar.php'; ?>

    <div class="container py-10">

        <div class="flex flex-wrap items-end justify-between gap-4 mb-8">
            <div>
                <h1 class="text-3xl mb-1">Artikel Blog</h1>
                <p class="text-sm text-default-500">Kelola artikel yang tampil di halaman /blog</p>
            </div>
            <a href="/admin/posts/create" class="py-3 px-6 rounded-lg bg-primary text-white text-sm font-medium hover:opacity-90 transition-all">
                + Tulis Artikel
            </a>
        </div>

        <div class="grid sm:grid-cols-3 gap-5 mb-8">
            <div class="rounded-xl border border-default-200 bg-white p-5">
                <p class="text-sm text-default-500 mb-1">Total Artikel</p>
                <p class="text-3xl font-bold text-default-950"><?php echo $stats[
                	'total'
                ]; ?></p>
            </div>
            <div class="rounded-xl border border-default-200 bg-white p-5">
                <p class="text-sm text-default-500 mb-1">Published</p>
                <p class="text-3xl font-bold text-primary"><?php echo $stats[
                	'published'
                ]; ?></p>
            </div>
            <div class="rounded-xl border border-default-200 bg-white p-5">
                <p class="text-sm text-default-500 mb-1">Draft</p>
                <p class="text-3xl font-bold text-default-700"><?php echo $stats[
                	'drafts'
                ]; ?></p>
            </div>
        </div>

        <?php if (isset($_GET['deleted'])): ?>
        <div class="mb-6 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
            Artikel berhasil dihapus.
        </div>
        <?php endif; ?>

        <div class="rounded-xl border border-default-200 bg-white overflow-hidden">
            <div class="p-5 border-b border-default-200 flex flex-wrap items-center gap-3">
                <form method="get" action="/admin" class="flex flex-wrap items-center gap-3">
                    <input type="search" name="q" placeholder="Cari judul / kategori..."
                        value="<?php echo htmlspecialchars($q, ENT_QUOTES); ?>"
                        class="w-64 rounded-lg border-default-200 focus:border-primary focus:ring-primary text-sm">

                    <select name="status" class="rounded-lg border-default-200 focus:border-primary focus:ring-primary text-sm">
                        <option value="">Semua status</option>
                        <option value="published" <?php echo $status ===
                        'published'
                        	? 'selected'
                        	: ''; ?>>Published</option>
                        <option value="draft" <?php echo $status === 'draft'
                        	? 'selected'
                        	: ''; ?>>Draft</option>
                    </select>

                    <button type="submit" class="py-2.5 px-5 rounded-lg bg-default-900 text-white text-sm font-medium hover:opacity-90 transition-all">
                        Filter
                    </button>

                    <?php if ($q !== '' || $status !== ''): ?>
                    <a href="/admin" class="text-sm text-default-500 hover:text-primary transition-colors">Reset</a>
                    <?php endif; ?>
                </form>

                <span class="ml-auto text-sm text-default-500"><?php echo count(
                	$posts,
                ); ?> artikel</span>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full text-sm">
                    <thead class="bg-default-50 text-left text-xs uppercase tracking-wide text-default-500">
                        <tr>
                            <th class="py-3 px-5 font-semibold">Judul</th>
                            <th class="py-3 px-5 font-semibold">Kategori</th>
                            <th class="py-3 px-5 font-semibold">Penulis</th>
                            <th class="py-3 px-5 font-semibold">Tanggal</th>
                            <th class="py-3 px-5 font-semibold">Status</th>
                            <th class="py-3 px-5 font-semibold text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-default-100">
                        <?php if (count($posts) === 0): ?>
                        <tr>
                            <td colspan="6" class="py-12 px-5 text-center text-default-500">
                                Belum ada artikel. Klik “+ Tulis Artikel” atau jalankan <code class="px-1 rounded bg-default-100">php bin/seed.php</code>.
                            </td>
                        </tr>
                        <?php endif; ?>
                        <?php foreach ($posts as $row): ?>
                        <tr class="hover:bg-default-50 transition-colors">
                            <td class="py-3.5 px-5 max-w-100">
                                <p class="font-medium text-default-950 leading-snug"><?php echo htmlspecialchars(
                                	$row['title'],
                                	ENT_QUOTES,
                                ); ?></p>
                                <p class="text-xs text-default-400 mt-0.5">/blog-details?post=<?php echo htmlspecialchars(
                                	$row['slug'],
                                	ENT_QUOTES,
                                ); ?></p>
                            </td>
                            <td class="py-3.5 px-5 text-default-600"><?php echo htmlspecialchars(
                            	$row['category'],
                            	ENT_QUOTES,
                            ); ?></td>
                            <td class="py-3.5 px-5 text-default-600"><?php echo htmlspecialchars(
                            	$row['author'],
                            	ENT_QUOTES,
                            ); ?></td>
                            <td class="py-3.5 px-5 text-default-600 whitespace-nowrap">
                                <?php echo $row['published_at']
                                	? date(
                                		'd M Y',
                                		strtotime($row['published_at']),
                                	)
                                	: '—'; ?>
                            </td>
                            <td class="py-3.5 px-5">
                                <?php if ($row['status'] === 'published'): ?>
                                <span class="inline-flex py-1 px-2.5 rounded-md bg-green-100 text-green-700 text-xs font-medium">Published</span>
                                <?php else: ?>
                                <span class="inline-flex py-1 px-2.5 rounded-md bg-default-100 text-default-600 text-xs font-medium">Draft</span>
                                <?php endif; ?>
                            </td>
                            <td class="py-3.5 px-5">
                                <div class="flex items-center justify-end gap-3">
                                    <a href="/admin/posts/<?php echo $row[
                                    	'id'
                                    ]; ?>/edit" class="text-primary text-sm font-medium hover:underline">Edit</a>
                                    <?php if (
                                    	$row['status'] === 'published'
                                    ): ?>
                                    <a href="/blog-details?post=<?php echo urlencode(
                                    	$row['slug'],
                                    ); ?>" target="_blank" rel="noopener" class="text-default-500 text-sm font-medium hover:text-primary">Lihat</a>
                                    <?php endif; ?>
                                    <form method="post" action="/admin/posts/<?php echo $row[
                                    	'id'
                                    ]; ?>/delete" onsubmit="return confirm('Hapus artikel “<?php echo htmlspecialchars(
	$row['title'],
	ENT_QUOTES,
); ?>”?');">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="action" value="delete">
                                        <input type="hidden" name="id" value="<?php echo $row[
                                        	'id'
                                        ]; ?>">
                                        <button type="submit" class="text-red-600 text-sm font-medium hover:underline">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>

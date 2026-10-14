<?php
/** Topbar admin — dipakai semua halaman di bawah /admin */
?>
<div class="bg-default-950 text-white">
    <div class="container flex flex-wrap items-center justify-between gap-4 py-4">
        <div class="flex items-center gap-6">
            <a href="/admin" class="flex items-center gap-2 font-semibold tracking-tight">
                <img src="/logo/logodopputih.webp" alt="DOP" class="h-7 w-7 rounded object-cover">
                DOP Admin
            </a>
            <a href="/admin" class="text-sm text-default-300 hover:text-white transition-colors <?php echo $activeNav ===
            'posts'
            	? 'text-white'
            	: ''; ?>">
                Artikel
            </a>
            <a href="/admin/posts/create" class="text-sm text-default-300 hover:text-white transition-colors <?php echo $activeNav ===
            'create'
            	? 'text-white'
            	: ''; ?>">
                Tulis Artikel
            </a>
        </div>

        <div class="flex items-center gap-5 text-sm">
            <?php if (auth_user()): ?>
            <span class="text-default-400">Masuk sebagai <span class="text-white"><?php echo htmlspecialchars(
            	auth_user(),
            	ENT_QUOTES,
            ); ?></span></span>
            <?php endif; ?>
            <a href="/blog" target="_blank" rel="noopener" class="text-default-300 hover:text-white transition-colors">Lihat Blog</a>
            <a href="/admin/logout" class="py-2 px-4 rounded-lg bg-primary text-white hover:opacity-90 transition-all">Logout</a>
        </div>
    </div>
</div>

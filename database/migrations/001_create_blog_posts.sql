-- 001_create_blog_posts.sql
-- Tabel postingan blog (SQLite, WAL mode diaktifkan lewat system/db.php).

CREATE TABLE IF NOT EXISTS blog_posts (
    id          INTEGER PRIMARY KEY AUTOINCREMENT,
    title       TEXT    NOT NULL,
    slug        TEXT    NOT NULL,
    excerpt     TEXT    NOT NULL DEFAULT '',
    content     TEXT    NOT NULL DEFAULT '',
    category    TEXT    NOT NULL DEFAULT 'Insights',
    cover_image TEXT    NOT NULL DEFAULT '',
    author      TEXT    NOT NULL DEFAULT 'DOP Team',
    status      TEXT    NOT NULL DEFAULT 'draft' CHECK (status IN ('draft', 'published')),
    published_at TEXT,
    created_at  TEXT    NOT NULL DEFAULT (datetime('now')),
    updated_at  TEXT    NOT NULL DEFAULT (datetime('now'))
);

CREATE UNIQUE INDEX IF NOT EXISTS idx_blog_posts_slug ON blog_posts (slug);
CREATE INDEX IF NOT EXISTS idx_blog_posts_status_published ON blog_posts (status, published_at DESC);
CREATE INDEX IF NOT EXISTS idx_blog_posts_category ON blog_posts (category);

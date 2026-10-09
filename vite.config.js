// vite.config.js
import { defineConfig } from 'vite';
import { fileURLToPath } from 'node:url';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
	plugins: [tailwindcss()],
	publicDir: false,
	resolve: {
		alias: {
			'~/': fileURLToPath(new URL('./src/', import.meta.url)),
		},
	},
	server: {
		port: 5177,
		strictPort: true,
		host: true,
		cors: true,
		origin: 'http://localhost:5177',
	},
	build: {
		outDir: 'public',
		emptyOutDir: false,
		assetsDir: 'build',
		manifest: true,
		rollupOptions: {
			input: 'src/js/app.js',
		},
	},
});
	
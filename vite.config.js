import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy'; // <-- 1. Impor plugin

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
        // 2. Tambahkan plugin static copy di sini
        viteStaticCopy({
            targets: [
                {
                    // Salin folder fonts dari bootstrap-icons
                    src: 'node_modules/bootstrap-icons/font/fonts',
                    // Ke dalam folder assets di direktori build
                    dest: 'assets'
                }
            ]
        }),
    ],
});

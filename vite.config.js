import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/quanlidoanhthu.js',
                'resources/js/quanlikhachhang.js',
                'resources/js/quanlidanhsachoto.js'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});

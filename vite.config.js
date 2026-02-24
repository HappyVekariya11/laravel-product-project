import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        host: '127.0.0.1',   // force IPv4 instead of [::1]
        port: 5173,
        cors: true,          // allow requests from your Laravel domain
        hmr: {
            host: '127.0.0.1',
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/scss/libs.scss',
                'resources/scss/style.scss',
                'resources/scss/home.scss',
                'resources/css/app.css',

                'resources/js/app.js',
                'resources/js/font-awesome.js',
                'resources/js/bootstrap.js',
                'resources/js/common.js',
                'resources/js/permissions.js',
                'resources/js/pages/restaurants.js',
            ],
            refresh: true,
        }),
    ],
});

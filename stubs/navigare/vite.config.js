import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import navigare from '@navigare/vite'

export default defineConfig({
    plugins: [
        laravel({
            input: 'resources/js/client.js',
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        navigare(),
    ],
    resolve: {
        alias: {
            '@scripts': '/resources/js',
        },
    },
});

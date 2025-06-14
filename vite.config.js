import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/filament/suser/theme.css',
                'resources/css/filament/adminerp/theme.css',
                'resources/css/filament/erp/theme.css',
                'resources/css/app.css',
                'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';


export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/theme.scss', 
                'resources/scss/user.scss', 
                'resources/js/bootstrap-config.js',
                "resources/js/app.js",
                'resources/js/pages/ecommerce-dashboard.js'
            ],
            refresh: true,
        }),
    ],
});

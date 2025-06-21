
# Pheonix Laravel Starter

A starter project of Laravel based on Phoenix Admin & Dashboard template to help the developers start their project immediately.



## Getting Started

Download and extract pheonix-laravel-v11, Once the project has been downloaded, start Laravel's local development server using Laravel Artisan's serve command:

```
cd phoenix-laravel-v11

php artisan serve
```


## Install Dependencies
You may install your application's frontend dependencies via NPM:
```
npm install
```


## Running Vite
Run the development server using `dev` command Or, running the `build` command will version and bundle your application's assets and get them ready for you to deploy to production:

```
npm run dev


npm run build
```


## Configuring Vite
Vite is configured via a vite.config.js file in the root of your project. You are free to customize this file based on your needs, and you may also install any other plugins your application requires. Here we have placed only the scripts of E-commerce Dashboard page, you may need to compile the other scripts from `resources/js/pages` directory.

```
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
```
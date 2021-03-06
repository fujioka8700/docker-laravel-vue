const { sourceMaps } = require('laravel-mix');
const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sourceMaps() // ソースマップの有効化
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .browserSync({
        proxy: {
            target: "http://127.0.0.1"
        },
        files: [
            './resources/**/*',
            './public/**/*'
        ],
        open: false,
        reloadOnRestart: true
    });

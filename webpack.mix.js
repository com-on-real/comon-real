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
    .js('resources/js/manager/app.js', 'public/js/manager')
    .js('resources/js/api/app.js', 'public/js/api')
    .sass('resources/sass/app.sass', 'public/css')
    .sass('resources/sass/cv/app.sass', 'public/css/cv/app.css')
    .js('resources/js/cv/app.js', 'public/js/cv/app.js'); // CV

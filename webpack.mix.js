let mix = require('laravel-mix');

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

mix.js('resources/assets/js/home/all_category.js', 'public/js/home')
	.js('resources/assets/js/shop/shop_front.js','public/js/shop')
   .sass('resources/assets/sass/app.scss', 'public/css');

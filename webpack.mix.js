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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .copyDirectory('resources/assets/chart/','public/chart/')

   .copyDirectory('resources/assets/codebase1/','public/codebase1/')
   .copyDirectory('resources/assets/common1/','public/common1/')

   .copyDirectory('resources/assets/codebase2/','public/codebase2/')
   .copyDirectory('resources/assets/common2/','public/common2/')

   .copyDirectory('resources/assets/orgChart/','public/orgChart/')

   .copy('resources/assets/sass/chartBootstrap.css','public/css/')

   .version();

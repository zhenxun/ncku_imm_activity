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
   .sass('resources/sass/app.scss', 'public/css')
   .copy('node_modules/canvas-nest.js/dist/canvas-nest.js', 'public/canvas-nest/canvas-nest.js');

mix.js('resources/js/backend/app.js', 'public/js/backend')
   .sass('resources/sass/backend/app.scss', 'public/css/backend')
   .copy('node_modules/bootstrap3/dist/css/bootstrap-theme.css', 'public/css/bootstrap3/bootstrap-theme.css')
   .copy('node_modules/bootstrap3/dist/css/bootstrap.css', 'public/css/bootstrap3/bootstrap.css')
   .copy('node_modules/admin-lte/dist/css/AdminLTE.css', 'public/css/adminLTE/AdminLTE.css')
   .copy('node_modules/admin-lte/dist/css/skins/_all-skins.min.css', 'public/css/adminLTE/_all-skins.min.css')
   .copy('node_modules/ionicons/dist/css/ionicons.min.css', 'public/css/ionicons/ionicons.min.css')
   .copy('node_modules/ionicons/dist/fonts/*', 'public/css/fonts')
   .copy('node_modules/font-awesome/css/font-awesome.min.css', 'public/css/fontawesome/font-awesome.min.css')
   .copy('node_modules/font-awesome/fonts/*', 'public/css/fonts');

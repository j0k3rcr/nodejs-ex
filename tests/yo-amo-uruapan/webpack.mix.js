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

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');
// mix.autoload({
//     jquery: ['$', 'window.jQuery']
// });


mix.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery'],
    tether: ['Tether', 'window.Tether'],
    'popper.js/dist/umd/popper.js': ['Popper']
})
    .js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');
//

mix.copy('node_modules/sweetalert/dist/sweetalert.min.js', 'public/js/sweetalert2.all.min.js');
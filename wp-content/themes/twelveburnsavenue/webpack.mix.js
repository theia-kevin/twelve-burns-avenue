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

mix.browserSync('twelveburnsavenue.test');

// mix.webpackConfig({
//   devtool: 'source-map'
// });

// mix.options({
//     processCssUrls: false,
//     postCss: [
//         require('postcss-discard-comments')({
//             removeAll: false
//         })
//     ]
// });

mix.options({
  processCssUrls: false
});

mix.js('resources/js/scripts.js', 'js/scripts.js');
mix.sass('resources/sass/style.scss', '.');
// mix.sass('resources/sass/style.scss', '.').sourceMaps();

const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js');
mix.js('resources/js/plugins.js', 'public/js');

/*
mix.postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);
*/
mix.sass('resources/sass/app.scss', 'public/css', {
  //implementation: require('node-sass')
}).sass('resources/sass/plugins.scss', 'public/css');

if (mix.inProduction()) {
  mix.version();
}
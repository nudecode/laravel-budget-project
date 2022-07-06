const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js");
mix.js("resources/js/main.js", "public/js/main.js")
    .sass("resources/sass/app.scss", "public/css")
    mix.css("resources/css/style.css", "public/css/style.css")
    .webpackConfig(require("./webpack.config"));

if (mix.inProduction()) {
    mix.version();
}

const { copyDirectory } = require("laravel-mix");
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
mix.js("resources/js/main.js", "public/js/main.js");
<<<<<<< HEAD
mix.js("resources/js/dashboard.js", "public/js/dashboard.js").sass(
    "resources/sass/app.scss",
    "public/css"
);
mix.css("resources/css/style.css", "public/css/style.css").webpackConfig(
    require("./webpack.config")
);
=======
mix.js(
    "resources/admin-template/js/bootstrap.bundle.min.js",
    "public/js/bootstrap.bundle.min.js"
);
mix.js(
    "resources/admin-template/js/jquery-3.5.0.min.js",
    "public/js/jquery.js"
);
mix.js(
    "resources/admin-template/js/bootstrap.min.js",
    "public/js/bootstrap.min.js"
);
mix.js("resources/admin-template/js/script.js", "public/js/script.js");
mix.sass("resources/sass/app.scss", "public/css");
mix.css("resources/css/style.css", "public/css/style.css");
mix.css(
    "resources/admin-template/css/bootstrap.css",
    "public/css/bootstrap.css"
);
mix.css(
    "resources/admin-template/css/responsive.css",
    "public/css/responsive.css"
);
mix.css(
    "resources/admin-template/css/ui.css",
    "public/css/ui.css"
).webpackConfig(require("./webpack.config"));
>>>>>>> main

if (mix.inProduction()) {
    mix.version();
}

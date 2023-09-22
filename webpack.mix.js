/**
 * webpack.mix.js
 * Configuration of Laravel Mix
 * https://laravel-mix.com/
 */
let mix = require("laravel-mix");

mix.setPublicPath("dist");

// Compile assets
mix.js("assets/js/index.js", "");
mix.sass("assets/sass/index.scss", "");

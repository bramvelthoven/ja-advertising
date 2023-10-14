let mix = require('laravel-mix');
const {sourceMaps} = require("laravel-mix");

require('laravel-mix-copy-watched');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/scss/app.scss', 'public/css')
    .options({
        processCssUrls: false,
    })
    .sourceMaps()
    .copyDirectory('resources/images', 'public/images');


let mix = require('laravel-mix');
const {sourceMaps} = require("laravel-mix");
require('laravel-mix-imagemin');

require('laravel-mix-copy-watched');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/scss/app.scss', 'public/css')
    .options({
        processCssUrls: false,
    })
    .sourceMaps()
    .imagemin(
        'img/**.*',
        {
            context: 'resources',
        },
        {
            optipng: {
                optimizationLevel: 5
            },
            jpegtran: null,
            plugins: [
                require('imagemin-mozjpeg')({
                    quality: 100,
                    progressive: true,
                }),
            ],
        }
    );


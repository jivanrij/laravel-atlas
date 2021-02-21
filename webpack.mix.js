const mix = require('laravel-mix');

mix.js('resources/js/theme.js', 'public/js')
    .sass('resources/scss/theme.scss', 'public/css');



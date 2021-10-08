const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.sass('./assets/src/main.scss', './assets/css/main.css').options({
    processCssUrls: false,
    postCss: [
        tailwindcss('./tailwind.config.js')
    ]
});
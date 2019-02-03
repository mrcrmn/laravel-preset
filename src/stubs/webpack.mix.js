let mix = require('laravel-mix')
let purgeCss = require('laravel-mix-purgecss')
let tailwind = require('tailwindcss')

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .options({
      postCss: [
        tailwind('./tailwind.js'),
      ]
    })
    .purgeCss()
    .version()

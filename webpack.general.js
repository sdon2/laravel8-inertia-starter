const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .webpackConfig({
        resolve: {
            alias: {
                vue: 'vue/dist/vue.js'
            },
        }
    })
    .sass('resources/sass/app.scss', 'public/css')
    .mergeManifest();

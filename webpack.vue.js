const mix = require('laravel-mix');
const path = require('path');

mix.js('resources/inertiajs/app.js', 'public/js/inertia.js')
    .vue({ version: 2 })
    .alias({
        '@': 'resources/inertiajs',
        ziggy: path.resolve('vendor/tightenco/ziggy/dist/vue'),
    })
    .mergeManifest();

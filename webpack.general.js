const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .combine([
        'resources/vendor/jquery-easing/jquery.easing.min.js',
        'resources/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'resources/vendor/datatables/jquery.dataTables.min.js',
        'resources/vendor/datatables/dataTables.bootstrap4.min.js',
    ], 'public/js/vendor.js')
    .sass('resources/sass/app.scss', 'public/css')
    .mergeManifest();

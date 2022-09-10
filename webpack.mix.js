const mix = require('laravel-mix');

require('laravel-mix-merge-manifest');

if (process.env.SECTION) {
    require(`${__dirname}/webpack.${process.env.SECTION}.js`);
}

mix.disableNotifications();

if (mix.inProduction()) {
    mix.version();
}

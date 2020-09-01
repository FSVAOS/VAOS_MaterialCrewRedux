const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');
const VuetifyLoader = require('vuetify-loader/lib/plugin');
mix.setPublicPath('../../public').mergeManifest();

mix.options({
    extractVueStyles: true,
    })
    .webpackConfig({
        plugins: [new VuetifyLoader()]
    })
    .js(__dirname + '/Resources/assets/js/main.js', 'js/materialcrewredux.js')
    .sass( __dirname + '/Resources/assets/sass/app.scss', 'css/materialcrewredux.css');

if (mix.inProduction()) {
    mix.version();
}

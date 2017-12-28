let mix = require('laravel-mix');
let config = {
    host: '192.168.10.10',
    port: 3000,
    base_url: 'vuestore.dev',
    watchFiles: [
        'app/**/*.php',
        'resources/views/**/*.php',
        'public/js/**/*.js',
        'public/css/**/*.css'
    ]
};

//Browserfy
mix.browserSync({
    files: config.watchFiles,
    host: config.host,
    proxy: config.base_url,
    port: config.port,
    online: true,
    logConnections: false,
    reloadOnRestart: true,
    notify: true,
    open: false,
    injectChanges: true,
    logSnippet: true,
    browser: ["google chrome", "firefox"]
});
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');
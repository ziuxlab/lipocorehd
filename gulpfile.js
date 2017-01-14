const elixir = require('laravel-elixir');
var critical = require('critical');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass('app.scss', 'resources/assets/css/bootstrap.css');
    mix.styles(['bootstrap.css', 'app.css'], 'public/css/app.css');
    mix.webpack('resources/assets/js/bootstrap.min.js', 'app.js');
    mix.scripts(['bootstrap.min.js','typed.js', 'aplicacion.js'], 'public/js/app.js');
    mix.copy('node_modules/bootstrap-sass/assets/fonts', 'public/fonts');
    mix.task('critical');
});


gulp.task('critical', function () {
    critical.generate({
        base: 'public/',
        src: 'http://lipocorehd.com',
        css: [
            'public/css/app.css',
        ],
        dimensions: [{
            width: 320,
            height: 480
        }, {
            width: 768,
            height: 1024
        }, {
            width: 1280,
            height: 960
        }],
        dest: 'css/critical.css',
        minify: true,
        extract: true,
        ignore: ['font-face'],
    });
});
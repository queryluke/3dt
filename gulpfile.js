var elixir = require('laravel-elixir');

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

var paths = {
    "node": "./node_modules/"
}



elixir(function(mix) {

    mix.sass('app.scss')

    //scripts
    .scripts([
            paths.node + 'jquery/dist/jquery.js',
            paths.node + 'bootstrap-sass/assets/javascripts/bootstrap.js',
            'app.js',
            'router.js'
        ],
        'public/js/app.js')

    //fonts
    .copy(paths.node+'bootstrap-sass/assets/fonts/bootstrap','public/fonts/bootstrap')
});

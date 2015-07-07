var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.scripts([

    	'app/config.js',
    	
    	<!-- controllers -->
    	'app/controllers/homeController.js',
    	'app/controllers/loginController.js',

    	<!-- directives -->
    	'app/directives/autocompleteDirective.js'
    	]);
});

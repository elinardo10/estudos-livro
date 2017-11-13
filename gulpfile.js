var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.scripts([
        '/../../../node_modules/jquery/dist/jquery.js',
        '/../../../node_modules/material-design-lite/material.js',
    	'/../../../node_modules/vue/dist/vue.js',
    	'/../../../node_modules/vue-resource/dist/vue-resource.js',
        '/../../../node_modules/bootstrap/dist/js/bootstrap.js',
    	'app.js'
    	], 'public/js/app.js');

     mix.styles([
        '/../../../node_modules/font-awesome/css/font-awesome.css',
        '/../../../node_modules/material-design-lite/dist/material.grey-light_green.min.css',
        '/../../../node_modules/bootstrap/dist/css/bootstrap.css',
    	'app.css'
    	], 'public/css/app.css');
     mix.copy('node_modules/font-awesome/fonts', 'public/fonts');

});
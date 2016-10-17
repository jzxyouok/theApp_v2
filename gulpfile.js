const elixir = require('laravel-elixir');
var gulp = require('gulp');

var watch = require('./resources/assets/semantic/tasks/watch');
var build = require('./resources/assets/semantic/tasks/build');

gulp.task('watch', watch);
gulp.task('build', build);


//var watch = require('./resources/assets/semantic/tasks/watch');
//var build = require('./resources/assets/semantic/tasks/build');

// import task with a custom task name
//gulp.task('watch-ui', 'Watch UI for Semantic UI', watch);
//gulp.task('build-ui', 'Build UI for Semantic UI', build);

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
    mix.browserify('main.js');

    // Start New
	mix
	    .copy('resources/assets/semantic/dist/semantic.js', 'public/js/app.js')
	    .copy('resources/assets/semantic/dist/semantic.css', 'public/css/app.css')
	    .copy('node_modules/jquery/dist/jquery.js', 'public/js/jquery.js')
	    .copy('resources/assets/semantic/dist/components/sidebar.css', 'public/css/sidebar.css')
	    .copy('resources/assets/semantic/dist/components/sidebar.js', 'public/js/sidebar.js')
	    .copy('resources/assets/semantic/dist/components/nag.css','public/css/nag.css')
	    .copy('resources/assets/semantic/dist/components/nag.js','public/js/nag.js')
	    .copy('resources/assets/semantic/dist/components/shape.css','public/css/shape.css')
	    .copy('resources/assets/semantic/dist/components/shape.js','public/js/shape.js')
	    .copy('resources/assets/semantic/dist/components/dropdown.css','public/css/dropdown.css')
	    .copy('resources/assets/semantic/dist/components/dropdown.js','public/js/dropdown.js')
	    .copy('resources/assets/semantic/dist/components/menu.css','public/css/menu.css')
	    .copy('resources/assets/leaflet/leaflet.js','public/js/leaflet.js')
	    .copy('resources/assets/leaflet/leaflet.css','public/css/leaflet.css')

	;
	mix.version(['js/app.js','css/app.css', 
		'js/jquery.js', 
		'css/sidebar.css', 'js/sidebar.js', 
		'css/nag.css', 'js/nag.js', 
		'css/menu.css', 
		'css/shape.css', 'js/shape.js',
		'js/dropdown.js','css/dropdown.css',
		'js/leaflet.js', 'css/leaflet.css']);
});

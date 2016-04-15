var gulp =require('gulp');
var rename = require('gulp-rename');
var browserify = require('browserify');
var watchify = require('watchify');
var source = require('vinyl-source-stream');


gulp.task('scripts', function(){
	var bundler = browserify({
		entries: ['./src/Camille/BlogBundle/Resources/scripts/main.js']
	});

	function bundle() {
		return bundler.bundle()
			.pipe(source('./web/assets/scripts/scripts.js'))
			.pipe(gulp.dest('./'));
	}
	bundle();

});
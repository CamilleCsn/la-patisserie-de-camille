var gulp = require('gulp');
var less = require('gulp-less');
var minifyCSS = require('gulp-minify-css');
var rename = require('gulp-rename');

gulp.task('styles', function(){
	gulp.src('./src/Camille/BlogBundle/Resources/styles/main.less')
		.pipe(less())
		.pipe(minifyCSS())
		.pipe(rename('styles.css'))
		.pipe(gulp.dest('./web/assets/css'));
});


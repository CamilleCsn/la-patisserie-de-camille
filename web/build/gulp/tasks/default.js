var gulp = require('gulp');

gulp.task('default', ['styles', 'scripts', 'notify'], function() {
	console.log('On s\'est bien occupé de votre code!');
	gulp.watch('./src/Camille/BlogBundle/Resources/styles/*.less', ['styles']);
	gulp.watch('./src/Camille/BlogBundle/Resources/scripts/*.js', ['scripts']);
});
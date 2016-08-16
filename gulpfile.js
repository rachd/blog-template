var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function() {
	return gulp.src('wordpress/wp-content/themes/blogtemplate/sass/style.scss')
		.pipe(sass())
		.pipe(gulp.dest('wordpress/wp-content/themes/blogtemplate'))
});

gulp.task('watch', ['sass'], function() {
	gulp.watch('wordpress/wp-content/themes/blogtemplate/sass/**/*.scss', ['sass']);
});

gulp.task('default', ['watch']);
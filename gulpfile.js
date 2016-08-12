var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();

gulp.task('sass', function() {
	return gulp.src('wordpress/wp-content/themes/blogtemplate/sass/style.scss')
		.pipe(sass())
		.pipe(gulp.dest('wordpress/wp-content/themes/blogtemplate'))
		.pipe(browserSync.reload({
			stream: true
		}))
});

gulp.task('browserSync', function() {
	browserSync.init({
		server: {
			baseDir: 'wordpress'
		},
	})
})

gulp.task('watch', ['browserSync', 'sass'], function() {
	gulp.watch('wordpress/wp-content/themes/blogtemplate/sass/**/*.scss', ['sass']);
	gulp.watch('wordpress/wp-content/**/*.php', browserSync.reload);
	gulp.watch('wordpress/wp-content/themes/blogtemplate/**/*.js', browserSync.reload)
});
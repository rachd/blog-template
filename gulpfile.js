var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
// var useref = require('gulp-useref');

// gulp.task('sass', function() {
// 	return gulp.src('wordpress/wp-content/themes/blogtemplate/sass/style.scss')
// 		.pipe(sass())
// 		.pipe(gulp.dest('wordpress/wp-content/themes/blogtemplate'))
// 		.pipe(browserSync.stream());
// });

// gulp.task('browserSync', function() {
// 	browserSync.init({
// 		proxy: 'localhost:80'
// 	});
// });

// gulp.task('watch', ['browserSync', 'sass'], function() {
// 	gulp.watch('wordpress/wp-content/themes/blogtemplate/sass/**/*.scss', ['sass']);
// 	gulp.watch('wordpress/wp-content/themes/blogtemplate/**/*.php', browserSync.reload);
// 	gulp.watch('wordpress/wp-content/themes/blogtemplate/**/*.js', browserSync.reload)
// });

// gulp.task('default', ['watch']);

// Static Server + watching scss/html files
gulp.task('serve', ['sass'], function() {

    browserSync.init({
        proxy: 'localhost:80'
    });

    gulp.watch("wordpress/wp-content/themes/blogtemplate/sass/*.scss", ['sass']);
    gulp.watch("wordpress/wp-content/themes/blogtemplate/*.php").on('change', browserSync.reload);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src("wordpress/wp-content/themes/blogtemplate/sass/*.scss")
        .pipe(sass())
        .pipe(gulp.dest("wordpress/wp-content/themes/blogtemplate"))
        .pipe(browserSync.stream());
});

gulp.task('default', ['serve']);

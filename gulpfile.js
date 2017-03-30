'use strict';

var gulp       = require('gulp'),
	  concat     = require('gulp-concat'),
    minifyCSS  = require('gulp-minify-css'),
    notify 	   = require('gulp-notify'),
    uglify 	   = require('gulp-uglify'),
    livereload = require('gulp-livereload'), // Livereload для Gulp
    rename     = require('gulp-rename'), // to rename any file
    sass       = require('gulp-sass');
 
gulp.task('sass', function () {
  gulp.src('sass/**/*.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(rename('style.min.css'))
    .pipe(gulp.dest('./css'));
});
 
gulp.task('sass:watch', function () {
  livereload.listen();
  gulp.watch('sass/**/*.scss', ['sass']);
});

gulp.task('min-css', function() {
  return gulp.src('css/*.css')
    .pipe(minifyCSS({compatibility: 'ie8'}))
    .pipe(rename('style.min.css'))
    .pipe(gulp.dest('./css'))
    .pipe(notify({ message: 'Styles task complete' }));
});

gulp.task('min-js', function() {
  return gulp.src('js/main.js')
    .pipe(uglify())
    .pipe(rename('main.min.js'))
    .pipe(gulp.dest('./js'))
    .pipe(notify({ message: 'JS task complete' }));
});

gulp.task("watch", function() {
  livereload.listen();
  gulp.watch('js/main.js', ['min-js']);
  gulp.watch('sass/**/*.scss', ['sass']);
  gulp.watch('css/*.css', ['min-css']);
});

gulp.task('default', ['sass', 'min-css', 'min-js']);

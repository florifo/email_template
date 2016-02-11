/* File: gulpfile.js */

// grab our gulp packages
var gulp  = require('gulp'),
gutil = require('gulp-util'),
connect = require('gulp-connect-php'),
browserSync = require('browser-sync'),
zip = require('gulp-zip'),
php2html = require("gulp-php2html"),
foreach = require("gulp-foreach"),
gulp = require('gulp');

gulp.task('convert', function () {

	gulp.src("index.php")
	.pipe(php2html())
	.pipe(gulp.dest("dist/"));
	gutil.log(" --- Files converted to html");

});

var filesToMove = [
	'images/*'
];

gulp.task('move', function(){
  	// the base option sets the relative root for the set of files,
  	// preserving the folder structure
  	gulp.src(filesToMove, { base: './' })
  	.pipe(gulp.dest('dist'));
  	gutil.log(" --- Files moved to dist folder");
});

gulp.task('to-zip', function() {
	gulp.src('dist',{base: "."})
	.pipe(zip('email.zip'))
	.pipe(gulp.dest('./dist/zip/'));
});


gulp.task('default', ['convert','move','to-zip']);
/**
 * Created by Smartbees on 30.03.2017.
 */
var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync').create();
var gutil = require('gulp-util');

var input = './scss/**/*.scss';
var output = './css';



gulp.task('sass', function () {
  let sassOptions = {
    style: 'expanded',
    outputStyle: 'compressed',
    precision: 7,
	sourceMap: false
  };
  return gulp.src(input)
    .pipe(sass(sassOptions))/*.on('error', errorHandler('Sass'))*/
    .on('error', console.error.bind(console))
    .pipe(autoprefixer({grid: true, browsers: ['last 5 version']})).on('error', errorHandler('Autoprefixer'))
    .pipe(gulp.dest(output))
    .pipe(browserSync.stream());
});

// Watch files for change and set Browser Sync
gulp.task('watch', function() {
	// Scss file watcher
	gulp.watch(input, ['sass'])
	.on('change', function(event){
	  console.log('File ' + event.path + ' was ' + event.type + ', running tasks...')
	});
});

// Default task
gulp.task('default', ['sass', 'watch'], function(){
	// BrowserSync settings
	browserSync.init({
		proxy: "szamex.loc",
	});
	gulp.watch("./css/style.css");
});

/**
 *  Common implementation for an error handler of a Gulp plugin
 */
function errorHandler(title) {
  'use strict';

  return (err) => {
    gutil.log(gutil.colors.red('[' + title + ']'), err.toString());
  };
};
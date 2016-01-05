var gulp = require('gulp'),
    concat = require('gulp-concat'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    stylus = require('gulp-stylus'),
    autoprefixer = require('gulp-autoprefixer'),
    minifyCSS = require('gulp-minify-css');

gulp.task('css', function () {
    gulp.src('src/stylus/main.styl')
        .pipe(stylus({compress: true, paths: ['src/stylus']}))
        .pipe(autoprefixer())
        .pipe(minifyCSS())
        .pipe(gulp.dest('assets/css'))
});

gulp.task('js', function() {
  gulp.src([
    'bower_components/enquire/dist/enquire.js',
    'src/scripts/modernizr_touch_detect.min.js',
    'src/scripts/slideMenu.js',
    'src/scripts/scrollEffect.js',
    'src/scripts/typingText.js',
    'src/scripts/init.js'
  ])
    // concat pulls all our files together before minifying them
    .pipe( concat('output.min.js') )
    .pipe(gulp.dest('assets/js'))
});

gulp.task('jshint', function() {
  gulp.src('src/scripts/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('default'));
});

gulp.task('watch', function () {
   gulp.watch('src/stylus/**/*.styl', ['css']);
   gulp.watch('src/scripts/*.js', ['js']);
});

gulp.task('default', ['css', 'jshint', 'js']);
gulp.task('start', ['watch']);
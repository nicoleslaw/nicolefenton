'use strict';

var gulp = require('gulp'),
  autoprefixer = require('gulp-autoprefixer'),
  browserSync = require('browser-sync').create(),
  concat = require('gulp-concat'),
  cssnano = require('gulp-cssnano'),
  cssnext = require('postcss-cssnext'),
  del = require('del'),
  // gutil = require('gulp-util'),
  notify = require('gulp-notify'),
  postcss = require('gulp-postcss'),
  rename = require('gulp-rename'),
  rev = require('gulp-rev'),
  sass = require('gulp-sass'),
  uglify = require('gulp-uglify'),
  source = require('vinyl-source-stream');

gulp.task('serve', ['plugins', 'styles', 'watch'], function() {
  browserSync.init({
    proxy: 'http://nicolefenton.local',
    notify: false,
    logLevel: 'info',
    logConnections: true,
    logFileChanges: true,
    online: true,
  });
});

gulp.task('plugins', function() {
  return gulp.src([
      '_/js/vendor/jquery.min.js',
      '_/js/vendor/velocity.min.js',
      '_/js/vendor/lazyload.min.js',
      // '_/js/vendor/jquery.easing.min.js',
      '_/js/vendor/jquery.shuffle.min.js'
    ])
    .pipe(concat('plugins.min.js'))
    // .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('_/js/min'))
      .on('error', notify.onError());
});

gulp.task('scripts', function() {
  del(['_/js/min/main.min.js']);

  return gulp.src('_/js/main.js')
    .pipe(uglify())
      .on('error', notify.onError())
    .pipe(rename({suffix: '.min'}))
      .pipe(gulp.dest('_/js/min'))
      .on('error', notify.onError());
});

gulp.task('watch', function () {
  gulp.watch('_/sass/*.scss', ['styles']);
  gulp.watch('_/sass/**/*.scss', ['styles']);
  gulp.watch('_/js/main.js', ['scripts']);
  gulp.watch(['site/templates/*.php', 'site/snippets/*.php', 'content/**/*.txt', 'content/**/**/*.txt']).on('change', browserSync.reload);
});

gulp.task('styles', function () {

  del(['_/css/*.css']);

  return gulp.src('_/sass/*.scss')
    .pipe(sass())
    .on('error', notify.onError())
    // .pipe(autoprefixer('last 2 versions', 'ie 9', 'ie 10', 'ios 7'))
    // .pipe(cssnext())
      .pipe(gulp.dest('_/css/'))
    .pipe(cssnano())
    .pipe(rename({suffix: '.min'}))
      .pipe(gulp.dest('_/css/'))
    // .pipe(rev())
     //  .pipe(gulp.dest('html/_/css/'))
    // .pipe(rev.manifest('public/rev-manifest.json', {
    //   base: 'public',
    //   merge: true
    // }))
    // .pipe(gulp.dest('html'))
    .pipe(browserSync.stream());
});

gulp.task('default', ['serve']);

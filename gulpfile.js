'use strict';

var gulp = require('gulp'),
  autoprefixer = require('gulp-autoprefixer'),
  browserSync = require('browser-sync').create(),
  cssnano = require('gulp-cssnano'),
  cssnext = require('gulp-cssnext'),
  del = require('del'),
  gutil = require('gulp-util'),
  notify = require('gulp-notify'),
  postcss = require('gulp-postcss'),
  rename = require('gulp-rename'),
  rev = require('gulp-rev'),
  sass = require('gulp-sass'),
  source = require('vinyl-source-stream');


gulp.task('serve', ['styles', 'watch'], function() {
  browserSync.init({
    proxy: 'http://nicolefenton.local',
    notify: false,
    logLevel: 'info',
    logConnections: true,
    logFileChanges: true,
    online: true,
  });
});

gulp.task('watch', function () {
  gulp.watch('_/sass/*.scss', ['styles']);
  gulp.watch('_/sass/**/*.scss', ['styles']);
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

'use strict';

var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var plumber = require('gulp-plumber');
var jade = require('gulp-jade');
var pug = require('gulp-pug');
var sass = require('gulp-sass');
var postcss = require('gulp-postcss');
var cssnext = require('postcss-cssnext');
var babel = require('gulp-babel');
var browserify = require('browserify');
var babelify = require('babelify');
var source = require('vinyl-source-stream');


// 読み込みもとパス
var srcpaths = {
    'scss': './src/sass/**/*.scss',
    'sass': './src/sass/**/*.sass',
    'jsx': './src/jsx/**/*.js',
    'jade': './src/jade/**/*.jade',
    'pug': './src/pug/pages/*.pug'
}

var dstpaths = {
    'css': './static/css',
    'js': './static/js'
}


// デフォルト読み込むところ

gulp.task('serve', function() {

    browserSync.init({
        server: "./",
        index: "index.html"
    });

    gulp.watch([srcpaths.scss, srcpaths.sass], function(event) {
        gulp.run('scss');
    });
    gulp.watch(srcpaths.jade, function(event) {
        gulp.run('jade');
    });

    gulp.watch(srcpaths.pug, function(event) {
        gulp.run('pug');
    });

    gulp.watch(srcpaths.jsx, function(event) {
        gulp.run('browserify');
    });

});

gulp.task('jade', function() {
    gulp.src(srcpaths.jade)
        .pipe(jade())
        .pipe(gulp.dest('./'))
        .pipe(browserSync.stream());
});
gulp.task('pug', function() {
    gulp.src(srcpaths.pug)
        .pipe(pug())
        .pipe(gulp.dest('./'))
        .pipe(browserSync.stream());
});

gulp.task('scss', function() {
    var processors = [
        cssnext()
    ];
    return gulp.src([srcpaths.scss, srcpaths.sass])
        .pipe(sass())
        .pipe(postcss(processors))
        .pipe(gulp.dest(dstpaths.css))
        .pipe(browserSync.stream());
});

gulp.task('browserify', function() {
    browserify({
            entries: './src/jsx/melon-soda-kai.js',
        })
        .transform(babelify)
        .bundle()
        .pipe(source("melon-soda-kai.js"))
        .pipe(gulp.dest(dstpaths.js))
        .pipe(browserSync.stream());
});

gulp.task('default', ['serve']);
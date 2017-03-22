/**
 * Created by Vic on 21/03/2017.
 */
var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');

var config = {
    assetsDir: 'resources/assets',
    sassPattern: 'sass/**/*.scss',
    cssDir: 'public/css'
};

gulp.task('sass', function() {
    gulp.src(config.assetsDir+'/'+config.sassPattern)
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(config.cssDir));
});

gulp.task('watch', function () {
    gulp.watch(config.assetsDir+'/'+config.sassPattern, ['sass'])
});

gulp.task('default', ['sass','watch']);
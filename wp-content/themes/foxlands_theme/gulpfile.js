var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var concat = require('gulp-concat');  
var rename = require('gulp-rename');  
var uglify = require('gulp-uglify');  
var babel = require('gulp-babel');
var svgmin = require('gulp-svgmin');

gulp.task('sass2', function () {
  return gulp.src('./*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./'));
});
 
 gulp.task('sass', function () {
  return gulp.src('./*.scss')
    .pipe(sass().on('error', sass.logError))
	.pipe(sourcemaps.init({loadMaps: true}))
  	.pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./'));
});

gulp.task('sass:watch', function() {
	gulp.watch('**/*.scss', ['sass']);
    gulp.watch('./inc/sass/*.scss', ['sass']);
    gulp.watch('js/main.js', ['convert']);
});

gulp.task('default', ['sass', 'sass:watch']);


var jsFiles = 'js/vendor/*.js',  
    jsDest = 'js/';

gulp.task('scripts', function() {  
    return gulp.src(jsFiles)
        .pipe(concat('scripts.js'))
        .pipe(gulp.dest(jsDest))
        .pipe(rename('scripts.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(jsDest));
});
 
gulp.task('convert', function() {
    return gulp.src('js/main.js')
        .pipe(babel({
            presets: ['es2015']
        }))
        .pipe(gulp.dest('js'));
});

gulp.task('svgmin', function() {
    return gulp.src('assets/src/svgs/**/*.svg')
        .pipe(svgmin())
    .   pipe(gulp.dest('assets/dist/svgs'));
});
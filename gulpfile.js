var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var minifyCSS = require('gulp-minify-css');
/* var del = require('del'); */
var uglify = require('gulp-uglify');


// CONNECT SCRIPTS

 
gulp.task('sass-app', function () {

  return gulp.src('app/style/scss/main.scss')
        .pipe(sass())
        .pipe(minifyCSS())
        .pipe(concat('buildd.css'))
        .pipe(gulp.dest('app/style/css'));
});



gulp.task('sass-adminPanel', function () {

  return gulp.src('adminPanel/style/scss/main-adminPanel.scss')
        .pipe(sass())
        .pipe(minifyCSS())
        .pipe(concat('build.css'))
        .pipe(gulp.dest('adminPanel/style/css'));
}); 




// LIBRARIES

gulp.task('cssPlugins-adminPanel', function(){
  return gulp.src(['node_modules/bootstrap/dist/css/bootstrap.min.css', 'node_modules/open-iconic/font/css/open-iconic-bootstrap.min.css'])
  .pipe(concat('build.min.css'))
  .pipe(gulp.dest('adminPanel/style/css'))
});



gulp.task('js', function(){
  return gulp.src(['node_modules/jquery/dist/jquery.slim.min.js', 
    'node_modules/popper.js/dist/umd/popper.min.js', 
    'node_modules/bootstrap/dist/js/bootstrap.min.js', 
    'app/js/angular.min.js', 
    'app/js/portal.js'])
  .pipe(concat('build.min.js'))
  .pipe(uglify())
  .pipe(gulp.dest('adminPanel/js'))
});




gulp.task('watch', function () {
  gulp.watch('app/style/scss/**/*.scss', gulp.series('sass-app'));     // OR: gulp.watch('app/style/scss/main.scss', gulp.series('sass-app'));    
  gulp.watch('adminPanel/style/scss/**/*.scss', gulp.series('sass-adminPanel'));  // Gets all files ending with .scss in adminPanel/style/css                                                             
});

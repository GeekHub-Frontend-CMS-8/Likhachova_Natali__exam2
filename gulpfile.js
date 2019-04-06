var gulp = require('gulp')
sass = require('gulp-sass');

gulp.task('sass', function () {
    return gulp.src('scss/import.scss')
        .pipe(sass())
        .pipe(gulp.dest('css'))
});
gulp.task('watch', function () {
    gulp.watch('scss/*.scss', ['sass']);

})

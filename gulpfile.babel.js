import gulp           from 'gulp';
import gulpPostcss    from 'gulp-postcss';
import gulpSourcemaps from 'gulp-sourcemaps';
import postcssCssnext from 'postcss-cssnext';
import postcssImport  from 'postcss-import';

const dirs = {
  src: 'THEME_NAME',
  dest: 'THEME_NAME'
};

gulp.task('css', () => {
  gulp.src(`${dirs.src}/css/style.css`)
    .pipe(gulpSourcemaps.init())
    .pipe(gulpPostcss([
      postcssImport(),
      postcssCssnext({
        features: {
          rem: false
        },
      })
    ]))
    .pipe(gulpSourcemaps.write('.'))
    .pipe(gulp.dest(`${dirs.dest}`));
});

gulp.task('watch', () => {
  gulp.watch(`${dirs.src}/css/**/*.css`, ['css']);
});

gulp.task('default', [
  'css',
  'watch'
]);

gulp.task('build', [
  'css'
]);

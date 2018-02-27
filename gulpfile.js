const gulp = require('gulp');
const gulpPostcss = require('gulp-postcss');
const gulpSourcemaps = require('gulp-sourcemaps');
const postcssCssnext = require('postcss-cssnext');
const postcssImport = require('postcss-import');

const dirs = {
	src: 'THEME_NAME',
	dest: 'THEME_NAME',
};

gulp.task('css', () => gulp.src(`${dirs.src}/css/style.css`)
	.pipe(gulpSourcemaps.init())
	.pipe(gulpPostcss([
		postcssImport(),
		postcssCssnext({
			features: {
				rem: false,
			},
		}),
	]))
	.pipe(gulpSourcemaps.write('.'))
	.pipe(gulp.dest(`${dirs.dest}`)));

gulp.task('watch', () => {
	gulp.watch(`${dirs.src}/css/**/*.css`, ['css']);
});

gulp.task('default', [
	'css',
	'watch',
]);

gulp.task('build', [
	'css',
]);

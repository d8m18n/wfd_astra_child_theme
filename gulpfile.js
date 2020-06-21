const gulp = require( 'gulp' );
const zip = require( 'gulp-zip' );
const replace = require( 'gulp-replace' );
const info = require( './package.json' );
const { series } = require( 'gulp' );
const del = require( 'del' );

function clean( cr ) {
	del( [ 'themeBundle' ] );
	return cr();
}

function bundle() {
	return gulp.src( [
		'**/*',
		'!.vscode/**',
		'!node_modules/**',
		'!src/**',
		'!bundled/**',
		'!vendor/**',
		'!.eslintignore',
		'!.eslintrc',
		'!.gitignore',
		'!.stylelintrc',
		'!composer.json',
		'!composer.lock',
		'!gulpfile.js',
		'!package.json',
		'!package-lock.json',
		'!phpcs.xml',
		'!postcss.config.js',
		'!README.md',
		'!webpack.dev.config.js',
		'!webpack.production.config.js',
	] )
		.pipe( replace( 'wfd Dev Child 1.0.7', info.name ) )
		.pipe( zip( `${ info.name }.zip` ) )
		.pipe( gulp.dest( 'themeBundle' ) );
}
exports.clean = clean;
exports.bundle = bundle;

const gulp = require( 'gulp' );
const zip = require( 'gulp-zip' );
const replace = require( 'gulp-replace' );
const info = require( './package.json' );
const del = require( 'del' );

const themeName = info.name;
const themeVersion = info.version;
const theme = `${ themeName }-${ themeVersion }`;

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
		.pipe( replace( 'wfd Dev Child', theme ) )
		.pipe( zip( `${ theme }.zip` ) )
		.pipe( gulp.dest( 'themeBundle' ) );
}
exports.clean = clean;
exports.bundle = bundle;

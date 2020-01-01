const path = require( 'path' );
const { CleanWebpackPlugin } = require( 'clean-webpack-plugin' );
const MiniCssExtractPlugin = require( 'mini-css-extract-plugin' );
const BrowserSyncPlugin = require( 'browser-sync-webpack-plugin' );
const TerserJSPlugin = require( 'terser-webpack-plugin' );
const OptimizeCSSAssetsPlugin = require( 'optimize-css-assets-webpack-plugin' );
const StyleLintPlugin = require( 'stylelint-webpack-plugin' );

module.exports = {
	entry: {
		frontend: [ './src/js/app.js', './src/css/style.css' ],
	},
	output: {
		filename: 'js/[name].js',
		path: path.resolve( __dirname, './dist' ),
		publicPath: '../',
	},
	mode: 'development',
	devtool: 'source-map',
	optimization: {
		minimizer: [ new TerserJSPlugin( {} ), new OptimizeCSSAssetsPlugin( {} ) ],
	},
	module: {
		rules: [
			{
				test: /\.$js/,
				enforce: 'pre',
				loader: 'eslint-loader',
				options: {
					fix: true,
				},
			},
			{
				test: /\.js$/,
				exclude: /node_modules/,
				use: {
					loader: 'babel-loader',
					options: {
						presets: [ '@babel/env' ],
						plugins: [ 'transform-class-properties' ],
					},
				},
			},
			{
				test: /\.css/,
				use: [
					MiniCssExtractPlugin.loader,
					'css-loader',
					'postcss-loader',
				],

			},
			{
				test: /\.(png|jpg)$/,
				use: [
					{
						loader: 'file-loader',
						options: {
							outputPath: 'images',
						},
					},
				],

			},
		],
	},
	plugins: [
		new StyleLintPlugin( {
			files: '/src/**/*.css',
			fix: true,
		} ),
		new MiniCssExtractPlugin( {
			filename: 'css/[name].css',
		} ),
		new CleanWebpackPlugin(),
		new BrowserSyncPlugin( {
			files: '**/*.php',
			injectChanges: true,
			proxy: 'https://webfoundations.local/',
		} ),
	],
};

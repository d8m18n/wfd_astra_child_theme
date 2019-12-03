const path = require( 'path' );
const { CleanWebpackPlugin } = require( 'clean-webpack-plugin' );

module.exports = {
    entry: './src/js/app.js',
    output: {
        filename: 'bundle.js',
        path: path.resolve( __dirname, './dist' ),
        publicPath: ''
    },
    mode: 'development',
    optimization: {},
    module: {},
    plugins: [
        new CleanWebpackPlugin()
    ]
};

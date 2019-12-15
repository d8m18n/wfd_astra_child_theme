const path = require( 'path' );
const { CleanWebpackPlugin } = require( 'clean-webpack-plugin' );
const MiniCssExtractPlugin = require( 'mini-css-extract-plugin' );
const BrowserSyncPlugin = require( 'browser-sync-webpack-plugin' );

module.exports = {
    context: __dirname,

    entry: './src/js/app.js',
    output: {
        filename: 'js/app.js',
        path: path.resolve( __dirname, './dist' ),
        publicPath: ''
    },
    mode: 'development',
    devtool: 'source-map',
    optimization: {
        minimize: true
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: [ '@babel/env' ],
                        plugins: [ 'transform-class-properties' ]
                    }
                }
            },
            {
                test: /\.css/,
                use: [
                    MiniCssExtractPlugin.loader,
                    'css-loader'
                ]

            }
        ]
    },
    plugins: [
        new MiniCssExtractPlugin( {
            filename: 'css/style.css'
        } ),
        new CleanWebpackPlugin(),
        new BrowserSyncPlugin( {
            files: '**/*.php',
            proxy: 'https://webfoundations.local/'
        } )
    ]
};

const path = require("path");
const { CleanWebpackPlugin } = require("clean-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
const TerserJSPlugin = require("terser-webpack-plugin");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");

module.exports = {
    entry: {
        frontend: "./src/js/index.js",
        editor: "./src/js/editor.js"
    },
    output: {
        filename: "js/[name].js",
        path: path.resolve(__dirname, "./dist"),
        publicPath: "../"
    },
    mode: "development",
    devtool: "source-map",
    optimization: {
        minimizer: [new TerserJSPlugin({}), new OptimizeCSSAssetsPlugin({})]
    },
    module: {
        rules: [
            {
                test: /\.$js/,
                enforce: "pre",
                exclude: /node_modules/,
                use: [
                    {
                        loader: "babel-loader",
                        options: {
                            presets: ["@babel/env"],
                            plugins: ["transform-class-properties"]
                        }
                    },
                    {
                        loader: "eslint-loader",
                        options: {
                            fix: true
                        }
                    }
                ]
            },
            {
                test: /\.(sa|sc|c)ss$/,
                use: [MiniCssExtractPlugin.loader, "css-loader", "postcss-loader", "sass-loader"]
            },
            {
                test: /\.(png|jpg)$/,
                use: [
                    {
                        loader: "file-loader",
                        options: {
                            name: "[name].[ext]",
                            outputPath: "images"
                        }
                    }
                ]
            }
        ]
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: "css/[name].css"
        }),
        new CleanWebpackPlugin(),
        new BrowserSyncPlugin({
            files: "**/*.php",
            injectChanges: true,
            proxy: "https://rss.local/"
        })
    ]
};

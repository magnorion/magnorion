const webpack = require("webpack"),
LivereloadPlugin = require("webpack-livereload-plugin");
module.exports = {
  entry: __dirname + "/assets/assets.js",
  output: {
    filename: "site-bundle.js",
    path: __dirname + "/assets/dist"
  },
  module: {
    rules: [
      {
        test: /\.(s*)css$/,
        use: ["style-loader","css-loader","sass-loader"]
      },
      {
        test: /\.(woff|woff2|ttf|svg|eot)/,
        use: ["url-loader"]
      }
    ]
  },
  plugins: [
    new LivereloadPlugin({
      port: 460
    }),
    new webpack.optimize.UglifyJsPlugin({
      minimize: true
    })
  ]
}

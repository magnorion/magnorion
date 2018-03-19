const webpack = require("webpack"),
  ExtractTextPlugin = require("extract-text-webpack-plugin");
module.exports = {
  entry: __dirname + "/assets/assets.js",
  output: {
    filename: "site-bundle.js",
    path: __dirname + "/assets/dist"
  },
  module: {
    rules: [
      {
        test: /\.(woff|woff2|ttf|svg|eot|jpg)/,
        use: [
          {
            loader: "url-loader",
            options: {
              limit: 8000
            }
          }
        ]
      },
      {
        test: /\.(s*)css$/,
        use: ["style-loader", "css-loader", "sass-loader"],
        use: ExtractTextPlugin.extract({
          fallback: "style-loader",
          use: [
            { loader: "css-loader", options: {minimize: true}},
            { loader: "sass-loader"}
          ]
        })
      }
    ]
  },
  plugins: [
    new webpack.optimize.UglifyJsPlugin({
      minimize: true
    }),
    new ExtractTextPlugin("style.css"),
    new webpack.ProvidePlugin({
      jQuery: "jQuery",
      $: "jQuery"
    })
  ]
}

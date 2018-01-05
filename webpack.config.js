const webpack = require("webpack");
module.exports = {
  entry: __dirname + "/assets/assets.js",
  output: {
    filename: "site-bundle.js",
    path: __dirname + "/assets/dist"
  },
  module: {
    rules: [
      {
        test: /\.scss$/,
        exclude: [/node_modules/],
        use: ["style-loader","css-loader","sass-loader"]
      }
    ]
  }
}

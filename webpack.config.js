const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');
const autoprefixer = require("autoprefixer");

module.exports = {
  mode: 'production',
  entry: "./wp-content/themes/theme-digevo/src/js/app.js",
  output: {
    path: path.resolve(__dirname, "wp-content/themes/theme-digevo/dist"),
    filename: "js/bundle.min.js",
  },

  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /(node_modules)/,
        use: {
          loader: "babel-loader",
          options: {
            presets: ["@babel/preset-env"],
          },
        },
      },
      {
        test: /\.(sa|sc|c)ss$/,
        use: [
          MiniCssExtractPlugin.loader,
          "css-loader",
          {
            loader: "resolve-url-loader",
          },
          {
            loader: "postcss-loader",
            options: {
              autoprefixer: {
                browser: ["last 2 versions"],
              },
              plugins: () => [autoprefixer],
            },
          },

          {
            loader: "sass-loader",
            options: {
              implementation: require("sass"),
              includePaths: ["./node_modules"],
            },
          },
        ],
      },
      {
        test: /\.(jpg|png|gif)$/,
        use: [
          {
            loader: "file-loader",
            options: {
              name: "[name].[ext]",
              outputPath: "./img/",
              publicPath: "../img",
            },
          },
          {
            loader: "image-webpack-loader",
            options: {
              mozjpeg: {
                progressive: true,
                quality: 90,
              },
              optipng: {
                enabled: false,
              },
              pngquant: {
                quality: [0.9, 0.95],
                speed: 4,
              },
              gifsicle: {
                interlaced: false,
              },
              // the webp option will enable WEBP
              webp: {
                quality: 90,
              },
            },
          },
        ],
      },
      {
        test: /\.(woff|woff2|ttf|otf|eot)$/,
        use: [
          {
            loader: "file-loader",
            options: {
              publicPath: "../fonts/",
              outputPath: "fonts",
            },
          },
        ],
      },
    ],
  },

  optimization: {
    minimize: true,
    minimizer: [new CssMinimizerPlugin()],
  },

  plugins: [
    new MiniCssExtractPlugin({
      filename: "./css/[name].min.css",
      publicPath: "../",
    }),
    new UglifyJsPlugin(),
  ],
};

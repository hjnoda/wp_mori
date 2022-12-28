const path = require("path");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
  mode: "development",
  entry: "./assets/js/index.js",
  output: {
    filename: "main.js",
    path: path.resolve(__dirname, "dist"),
    //ファイルを出力する前にディレクトリをクリーンアップ
    clean: true,
  },
  module: {
    rules: [
      //SASS 及び CSS 用のローダー
      {
        //拡張子 .scss、.sass、css を対象
        test: /\.(scss|sass|css)$/i,
        // 使用するローダーの指定（後ろから順番に適用される）
        use: [
          MiniCssExtractPlugin.loader,
          {
            loader: "css-loader",
            options: {
              // postcss-loader と sass-loader の場合は2を指定
              importLoaders: 2,
              // 0 => no loaders (default);
              // 1 => postcss-loader;
              // 2 => postcss-loader, sass-loader
            },
          },
          // PostCSS の設定
          {
            loader: "postcss-loader",
            options: {
              postcssOptions: {
                plugins: [
                  [
                    "postcss-preset-env",
                    {
                      //必要に応じてオプションを指定
                      stage: 2,
                      features: {
                        "nesting-rules": true,
                      },
                      browsers: "last 2 versions",
                      //autoprefixer のオプション
                      autoprefixer: { grid: true },
                    },
                  ],
                  //css-declaration-sorter を追加
                  [
                    "css-declaration-sorter",
                    {
                      order: "smacss",
                      // alphabetical：アルファベット順（デフォルト）
                      // smacss：最も重要なフローに影響を与えるプロパティから最も重要でないプロパティの順
                      // concentric-css：ボックスモデルの外側に適用されるプロパティから内側の順
                    },
                  ],
                  [
                    //PostCSS Sort Media Queries（mobile-first でソート）
                    "postcss-sort-media-queries",
                    {
                      sort: "mobile-first",
                      //mobile-first：モバイルファーストでまとめる（デフォルト）
                      //desktop-first：デスクトップファーストでまとめる
                      //独自の関数を指定
                    },
                  ],
                ],
              },
            },
          },
          //Sass ローダー
          "sass-loader",
        ],
      },
    ],
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "bundle.css",
    }),
    new BrowserSyncPlugin({
      host: "localhost",
      files: ["./**/*.php", "./**/*.scss", "./**/*.css", "./**/*.js"],
      port: 3000,
      // dockerとホストをつないでいるポートをproxyで指定
      proxy: {
        target: "http://localhost:8081",
      },
    }),
  ],
  watchOptions: {
    ignored: /node_modules/, //正規表現で指定
    // aggregateTimeout: 200,
    // poll: 1000,
  },
};

"use strict";

const path = require("path");
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const autoprefixer = require("autoprefixer");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
const lost = require("lost");
const SvgStore = require("webpack-svgstore-plugin");

const themeSlug = "wordpress-webpack";
const vhost = "http://zuma.localhost/";

module.exports = {
   entry: ["./app/js/app.js", "./app/scss/style.scss"],

   output: {
      filename: "./assets/app.min.js"
   },

   module: {
      rules: [
         //jshint
         {
            test: /\.js$/, // include .js files
            enforce: "pre", // preload the jshint loader
            exclude: /node_modules/, // exclude any and all files in the node_modules folder
            use: [
               {
                  loader: "jshint-loader"
               }
            ]
         },
         {
            /* STYLESHEETS */
            test: /\.scss$/,
            use: ExtractTextPlugin.extract({
               use: [
                  {
                     loader: "css-loader",
                     options: {
                        sourceMap: true
                     }
                  },
                  {
                     loader: "postcss-loader",
                     options: {
                        sourceMap: true,
                        plugins: () => [autoprefixer, lost]
                     }
                  },
                  {
                     loader: "sass-loader",
                     options: {
                        sourceMap: true
                     }
                  }
               ],
               fallback: "style-loader"
            })
         },
         // NOT sure this is working
         {
            test: /\.js$/,
            exclude: /(node_modules)/,
            use: {
               loader: "babel-loader",
               options: {
                  presets: ["es2015"]
               }
            }
         },
         {
            /* FONTS */
            test: /\.(eot|ttf|woff|woff2)$/,
            use: [
               {
                  loader: "file-loader",
                  options: {
                     name:
                        "wp-content/themes/" +
                        themeSlug +
                        "/assets/fonts/[name].[ext]",
                     publicPath: "/"
                  }
               }
            ]
         },
         {
            /* IMAGES */
            test: /\.(png|jpe?g|svg)$/,
            // exclude: /media\//,
            use: [
               {
                  loader: true ? "file-loader" : "url-loader",
                  options: {
                     name: "./assets/img/[name].[hash].[ext]",
                     publicPath: "/"
                  }
               }
            ]
         }
      ]
   },
   plugins: [
      new ExtractTextPlugin({
         filename: "./assets/style.css",
         allChunks: true
      }),
      new BrowserSyncPlugin({
         // browse to http://localhost:3000/ during development,
         // ./public directory is being served
         host: "localhost",
         port: 3000,
         files: ["./**/*.php", "./app/scss/**/*.scss", "./app/js/**/*.js"], // Reaload *.php
         proxy: {
            target: vhost
         }
      }),
      // create svgStore instance object
      new SvgStore({
         // svgo options + hash: true to watch
         hash: true,
         svgoOptions: {
            plugins: [
               { removeDoctype: true },
               { removeTitle: true },
               { removeMetadata: true },
               { removeComments: true },
               { cleanupIDs: true },
               { removeDimensions: false }
            ]
         },
         prefix: "icon" + "-"
      })
   ],
   watch: true
};

# Wordpress Theme Boilerplate w/ Webpack

This is a very simple Wordpress boilerplate theme that uses Webpack to compile
Javascript and Sass.

## Install
Delete you version of wp-content. Clone this repro directly into the root of your Wordpress install. A new wp-content folder will be generated.
```
$ git clone https://github.com/sidelsky/wordpress-webpack-theme .
$ yarn install
$ yarn run watch
```

## Usage
Javascript will compile to dist/main.min.js, and Sass will compile to dist/style.css

# Wordpress Theme Boilerplate w/ Webpack

This is a very simple Wordpress boilerplate theme that uses Webpack to compile
Javascript and Sass.

## Install
Delete you version of wp-content. Clone this repro directly into the root of your Wordpress install. A new wp-content folder will be generated.
```

$ git init
$ git remote add origin https://github.com/sidelsky/wordpress-webpack-theme.git
$ git pull origin master
$ cd wp-content/themes/wordpress-webpack
$ composer install
$ yarn install
$ yarn watch
```

## Usage
Javascript will compile to dist/main.min.js, and Sass will compile to dist/style.css

## ACF Plugin key
You will have to create .env file in the root of the theme folder to hold the key for ACF
ACF_PRO_KEY=xxxxxxxx

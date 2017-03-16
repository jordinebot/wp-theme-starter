![Repository Logo](https://cloud.githubusercontent.com/assets/527879/23945749/09405eac-0978-11e7-90f5-8160b53672e8.png)
![Travis CI](https://travis-ci.org/jordinebot/wp-theme-starter.svg?branch=master)

# wp-theme-starter

**WordPress Theme Starter Kit** is a simple boilerplate for creating a Wordpress Theme (almost) from scratch. With, of course, PHP for templates, SASS/SCSS as styles preprocessor and Babel transpiled ES6 code. It provides:

+ The basic required files for a blank theme (*style.css, index.php, functions.php, screenshot.png…*)
+ Build system that concatenates, minifies and also enqueues both custom and vendor scripts and styles.
+ Tasks to facilitate [Semantic Versioning](http://semver.org/).


## Requeriments

+ [Node.js](https://nodejs.org/en/)
+ [Gulp](http://gulpjs.com)


## Installation
1. Clone (or [download](https://github.com/jordinebot/wp-theme-starter/archive/master.zip)) this package
```bash
git clone https://github.com/jordinebot/wp-theme-starter.git
cd wp-theme-starter/
``````

2. Install dependencies
```bash
npm install
```

3. Edit `package.json` to add your own project information

## Usage

1. Place your server code and static files in `src/templates/`. Some `@@variables` are available. For example:

```php
function @@theme_name_prefixed_function {
    // Some code
}
```

will be replaced on the *dist* folder with:

```php
function wp_theme_starter_prefixed_function {
    // Some code
}
```

or whatever value the key `name` has on `package.json`. Refer to Gulpfile's `replacements.common` to see the available variables or to add your own.

2. Place your styles in `src/scss/`
3. Add your Javascript with ES6 syntax in `src/es6/`
4. If you need to load any third-party libraries, place them in the corresponding `vendor/css` or `vendor/js` folders.

### Building your theme

To build your project, use:

```bash
gulp build --env <environment>
```

where `<environment>` should be:

+ `development` ***(default)***
All your SCSS will be trasnspiled to a non-minified `<dist>/style.css` with a valid WP stylesheet header. ES6 code will be transpiled to `<dist>/js/main.js`. Vendor code, if any, will be concatenated to `<dist>/vendor.min.css` and `<dist>/js/vendor.min.js` and properly enqueued to Wordpress, to not interfere your code on debugging.

+ `production`
All scripts and styles (both yours and vendors) will be concatenated, minified/uglified and enqueued to Wordpress in `<dist>/style.css` and `<dist>/js/main.js`.

In both environments, scripts and styles will be enqueued to Wordpress with the package version + build number to avoid browser's cache issues. The *dist* folder, by default will be named has your project with a leading underscore. So, by default: `_wp-theme-starter`.

### Developing

Executing `gulp develop` or just `gulp` will do a first build on development environment and then will *watch* for changes on templates, styles and scripts to automatically rebuild those items.

**Preview your theme**
Some people like to put the local Wordpress installation under the same project folder (even in the repo) while developing a theme. What I do is having a dummy WP install and link my theme under development the check the progress. Something like:

```bash
ln -s /path-to/wp-theme-starter/_wp-theme-starter/ /path-to/wordpress/wp-content/themes/wp-theme-starter
```

**Versioning**
The WordPress Theme Starter Kit provides `semver:major`, `semver:minor` and `semver:patch` tasks which automatically increases the proper digit on `package.json`'s version number. Execute them in the terminal as:

```bash
gulp semver:major
gulp semver:minor
gulp semver:patch
```

Also, *major* and *minor* reset the JS and CSS build counts but *patch* doesn't.

## Contributing
Please, [contact me](http://jordinebot.cat/#contact) or open an issue/pull request to opinate, ask for help, report bugs, send or propose improvements, etc. Thank you!


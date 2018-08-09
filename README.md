#Martynbiz theme

...

## Installing the theme

1. cd into wp-content/themes directory
2. git clone https://... uos-layout

Activate the Theme through the 'Themes' menu in WordPress.

Also, there is a menu registered called "Primary menu", this is the location of the main
menu bar. Create a new menu for this location in Appearance > Menus for links to appear

## Development

This theme uses NPM/Bower for dependency management and Gulp for asset compilation:

```
$ cd wp-content/themes/uos-layout
$ npm install
$ bower install
```

Now that dependencies have been install, to edit styles and javascript, run:

```
$ gulp
```

Note: DO NOT edit style.css and script.js directly! Only edit scss/* and js/* files.
Changes will be overwritten when next compiled.


TODO
* https://codex.wordpress.org/Theme_Development
* theme versions ?
* get uploads to work

Before activating live:
* are images displaying correctly (not using placeholder)

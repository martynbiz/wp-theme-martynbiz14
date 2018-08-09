<?php
/**
 * Uos-blog Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package uos-layout
 */

add_action( 'init', 'martynbiz18_theme_register_menus' );
add_action( 'wp_enqueue_scripts', 'martynbiz18_theme_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'martynbiz18_theme_enqueue_scripts' );
add_action( 'widgets_init', 'martynbiz18_theme_sidebar_registration' );

/**
 * Load stylesheets
 */
function martynbiz18_theme_enqueue_styles() {

	// if used as a child theme, then we will assume it was created with its own enqueue styles function(?)
	if (! is_child_theme()) {
		wp_enqueue_style( 'uos_stylesheet', get_template_directory_uri() . '/style.css' );
	}

	// brand fonts
	wp_enqueue_style( 'uos_gfonts', '//fonts.googleapis.com/css?family=Ruda:400,700' );

}

/**
 * Load scripts
 */
function martynbiz18_theme_enqueue_scripts() {

    wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js', array(), 1.1, true);

}

/**
 * Register menus
 */
function martynbiz18_theme_register_menus() {

	register_nav_menus(
 		array(
 			'primary' => __( 'Primary Menu' ),
 		)
 	);

}

function martynbiz18_theme_sidebar_registration() {

	register_sidebar( array(
		'name' 			=> __( 'Sidebar' ),
		'id'			=> 'sidebar',
		'description' 	=> __( 'Widgets in this area will be shown in the sidebar.' ),
		'before_title' 	=> '<h3 class="widget-title">',
		'after_title' 	=> '</h3>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget' 	=> '</div><div class="clear"></div></div>',
	) );

}

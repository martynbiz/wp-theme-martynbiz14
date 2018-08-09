<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Martynbiz
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="stylesheet" href="http://staticfiles.rtyn.biz/martynbiz/css/application.css">
	<link href='http://fonts.googleapis.com/css?family=PT+Serif:regular,italic,bold,bolditalic' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php //wp_head(); ?>
</head>

<?php

/*

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link href='http://fonts.googleapis.com/css?family=PT+Serif:regular,italic,bold,bolditalic' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

*/

?>

<body <?php body_class(); ?>>

<div data-role="page">

<div class="controls">
  <h1><span><?php bloginfo( 'name' ); ?></span></h1>
</div>

<div class="wrapper" id="wrapper"> 

<header>
	<div class="headerWrapper">
    <ul id="mainMenu" class="mainMenu">
		  <?php $args = array(
      #	'authors'      => '',
	      'child_of'     => 0,
      #	'date_format'  => get_option('date_format'),
      	'depth'        => 1,
      #	'echo'         => 1,
      #	'exclude'      => '',
      #	'include'      => '',
      #	'link_after'   => '',
      #	'link_before'  => '',
      #	'post_type'    => 'page',
      #	'post_status'  => 'publish',
      #	'show_date'    => '',
      #	'sort_column'  => 'menu_order, post_title',
	      'title_li'     => '', #__('Pages'), 
      #	'walker'       => ''
      );

      wp_list_pages( $args ); ?>
	  </ul>
	</div>
</header>

<div data-role="content" class="contentWrapper">

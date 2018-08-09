<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<section>
	<div class="sideMenu">
	</div>
</section>

<section>
	<div class="contentTab">
		<div class="contentPanel contentHome">
			<div class="padding">				
				<p>Page not found, click <a href="/">here</a> to return to the homepage.</p>

			</div>
		</div>
	</div>
</section>

<?php
get_footer();

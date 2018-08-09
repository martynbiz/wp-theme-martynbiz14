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
	  <ul>
			<?php $args = array(
      #	'authors'      => '',
	      'child_of'     => ($post->post_parent) ? $post->post_parent : $post->ID,
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
</section>

<section>
	<div class="contentTab">
		<div class="contentPanel contentHome">
			<div class="padding">
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?= the_content(); ?>
				<?php endwhile; endif; ?>

			</div>
		</div>
	</div>
</section>

<?php
get_footer();

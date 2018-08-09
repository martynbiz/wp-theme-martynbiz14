<?php get_header(); ?>

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
			<div class="padding blogContainer">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          
	        <div class="post">
		        <div class="post_header">
			        <p class="date"><?php the_time('F jS, Y') ?></p>
			        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			        <span class="subheader"><?php the_tags(''); ?></span>
		        </div>
		        <div class="post_content">
		        	<?php the_content(); ?>
		        </div>
          </div>
        <?php endwhile; 
        wp_reset_postdata();
        
        endif; ?>
        
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
?>

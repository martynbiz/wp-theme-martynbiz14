<?php get_header(); ?>

<section>
	<div class="sideMenu">
	  <ul>
			<?php
      
      $cat = get_the_category();
      
      $args = array(
				// 'show_option_all'    => '',
				// 'orderby'            => 'name',
				 'order'              => 'DESC',
				// 'style'              => 'list',
				// 'show_count'         => 0,
				'hide_empty'         => 1,
				// 'use_desc_for_title' => 1,
				// 'child_of'           => 0,
				// 'feed'               => '',
				// 'feed_type'          => '',
				// 'feed_image'         => '',
				// 'exclude'            => '',
				// 'exclude_tree'       => '',
				// 'include'            => '',
				// 'hierarchical'       => 1,
				'title_li'           => '',
				// 'show_option_none'   => __( 'No categories' ),
				// 'number'             => null,
				// 'echo'               => 1,
				// 'depth'              => 0,
				'current_category'   => $cat[0]->cat_ID,
				// 'pad_counts'         => 0,
				// 'taxonomy'           => 'category',
				// 'walker'             => null
			);
			
			wp_list_categories( $args ); ?>
		</ul>
	</div>
</section>

<section>
	<div class="contentTab">
		<div class="contentPanel contentHome">
			<div class="padding blogContainer">
				
				<?
				
				$args = array(
					'cat'      => $cat[0]->cat_ID,
					'order'    => 'DESC',
					'posts_per_page'    => 10,
				);
				$posts = query_posts( $args );
				
        //foreach ( $posts as $post ) :
          //setup_postdata( $post ); ?>
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          
          <?php
					global $more;
					$more = 0;
					?>
          
	        <div class="post">
		        <div class="post_header">
			        <p class="date"><?php the_time('F jS, Y') ?></p>
			        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			        <span class="subheader"><?php the_tags(''); ?></span>
		        </div>
		        <div class="post_content">
		        	<?php the_content('Read more'); ?>
		        </div>
          </div>
          
          <?php endwhile; endif; ?>
        <?php //endforeach; 
        wp_reset_postdata(); ?>
        
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
?>

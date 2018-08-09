<?php get_header(); ?>

<section>
	<div class="sideMenu">
	  <ul>
			<?php /*$args = array(
      #	'authors'      => '',
	      'child_of'     => ($post->post_parent) ? $post->post_parent : 13,
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

      wp_list_pages( $args );*/
      
      $args = array(
				// 'show_option_all'    => '',
				// 'orderby'            => 'name',
				// 'order'              => 'ASC',
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
				// 'current_category'   => 0,
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
			<div class="padding">
			
			  <div class="welcomeText">
          <div class="padding">
          <h2>Blogs</h2>
          <p><span class="intro_blurb">I spend much of my time learning about new and current web technologies and wanted to contribute my own thoughts and opinions .. so, yet another blog is born ;)</span></p>
          </div>
        </div>
				
				 <div class="tag_cloud">
				 <?php $args = array(
#            'smallest'                  => 8, 
#            'largest'                   => 22,
#            'unit'                      => 'pt', 
            'number'                    => 45,  
#            'format'                    => 'flat',
#            'separator'                 => "\n",
#            'orderby'                   => 'name', 
#            'order'                     => 'ASC',
#            'exclude'                   => null, 
#            'include'                   => null, 
#            'topic_count_text_callback' => default_topic_count_text,
#            'link'                      => 'view', 
#            'taxonomy'                  => 'post_tag', 
#            'echo'                      => true,
#            'child_of'                  => null
        ); 
        
        wp_tag_cloud( $args ); ?>
        </div>

			</div>
		</div>
	</div>
</section>

<?php
get_footer();

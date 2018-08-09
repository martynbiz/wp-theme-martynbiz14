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
			<div class="padding">
			
			  <div class="welcomeText">
          <div class="padding">
          <h2>My name is <span class="myname">Martyn Bissett</span><br />
          Welcome to my website</h2>
          <p><span class="intro_blurb">Finally, I have a blog! Planning to write about anything and everything to do with web development and design. Please read my entries, browse my sites and feel free to leave a comment (coming soon) or <a href="/home/contact/">get in touch</a>.</span></p>
          </div>
        </div>
				
				<?php

        $args=array(
          'tag' => $post->post_name,
          'showposts'=>5,
          'caller_get_posts'=>1
        );
        $my_query = new WP_Query($args);
        if( $my_query->have_posts() ) {
          echo '5 recent Posts with tag1';
          while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
           <?php
          endwhile;
        } //if ($my_query)
        wp_reset_query();  // Restore global post data stomped by the_post().

        ?>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>

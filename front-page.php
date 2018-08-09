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
				
				<div class="welcomeText">
					<div class="padding">
						<h2>My name is <span class="myname">Martyn Bissett</span><br >
						Welcome to my website</h2>
						<p>This is my blog slash about slash portfolio slash homepage. Here you'll find stuff I've written about web technologies I use as well as other interests. I'll be adding new content from time to time so do check back.</p>
					</div>
				</div>
				
				<div class="col1">
				
				<?
				$args = array( 'posts_per_page' => 5, 'category' => 'Web development' );
        $posts = query_posts('cat=8'); //get_posts( $args );
        foreach ( $posts as $post ) :
          setup_postdata( $post ); ?>
          
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
        <?php endforeach; 
        wp_reset_postdata(); ?>
        
        </div>
				
				<div class="col2">

        <!-- <div class="sidepanel">
          <div class="padding">
            <h3>Past blog entries</h3>
            <ul>
            <?php
            /*$args = array( 
            	'numberposts' => '5',
            	'post_status' => 'publish',
            );
            $recent_posts = wp_get_recent_posts($args);
            foreach( $recent_posts as $recent ){
              echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
            }*/
            ?>
            </ul>
          </div>
        </div> -->

				<div class="sidepanel">
          <div class="padding">
            <h3>Tools/ Technologies I'm currently working with</h3>
            <ul>
              <li>Laravel Framework</li>
              <li>Java / Android development</li>
            </ul>
          </div>
        </div>



        <div class="sidepanel">
          <div class="padding">
            

            <h3>PHP Libraries on Packagist</h3>
            <ul>
              <li><a href="//packagist.org/packages/martynbiz/php-mongo" target="_blank">Mongo ODM</a><br />
              Tons of features, see full documentation on github. PHP and HHVM compatible.</li>
              <li><a href="//packagist.org/packages/martynbiz/php-flash-message" target="_blank">Flash messenger</a><br />
              Flash messenger that will keep messages until they are "flushed" - current or persistant states.</li>
              <li><a href="//packagist.org/packages/martynbiz/php-validator" target="_blank">Validator</a><br />
              Basic validation for PHP forms. Allows validation rules to be chained for writing readable clean code.</li>
              <li><a href="//packagist.org/packages/martynbiz/slim3-controller" target="_blank">Slim3 Controller</a><br />
              Provides controller functionality to Slim Framework v3. Also includes PHPUnit TestCase for testing controllers.</li>
            </ul>

<h3>Libraries on Github</h3>
            <ul>
              <li><a href="//github.com/martynbiz/loaded" target="_blank">Loaded</a><br />
              JavaScript library for sharing templates between front and backend. Require.js ready.</li>
              <li><a href="//github.com/martynbiz/java-budget" target="_blank">Budget</a><br />
              My first real Java application, so interesting learning process. Tool for managing personal finances.</li>
              <li><a href="//github.com/martynbiz/ajax" target="_blank">Ajax caller</a><br />
              My simple AJAX caller object. Can cache requests to reduce calls made.</li>
            </ul>

<p>I've also contributed other projects such as <a href="//github.com/slimphp/Slim/pull/1929">Slim Framework</a></p>
          </div>
        
        
        </div>

			</div>
		</div>
	</div>
</section>

<?php
get_footer();
?>

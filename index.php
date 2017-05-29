<?php/** * The home template */get_header(); ?><div class="featured-image has-video" style="background-image: url(<?php if ( function_exists( 'ot_get_option' ) ) { echo $test_input = ot_get_option( 'homepage_banner' );}?>);"><div class="videos"><video autoplay  poster="<?php echo get_template_directory_uri();?>/images/backpacking-through-europe-the-savvy-backpacker.jpg" id="bgvid" loop muted><source src="<?php if ( function_exists( 'ot_get_option' ) ) { echo $test_input = ot_get_option( 'video_link' );}?>" type="video/mp4"></video></div><!-- / videos --><div class="featured-heading"><h1><?php if ( function_exists( 'ot_get_option' ) ) { echo $test_input = ot_get_option( 'header_title' );}?></h1></div></div><!-- / featured-image --><div class="recent-posts-heading pa-heading"><h3>Recent Blog Posts</h3></div>		<div class="recent-posts pa">		<?php		$args = array( 	    'numberposts' => '3',		'post_status' => 'publish'	);	$recent_posts = wp_get_recent_posts( $args );	foreach( $recent_posts as $recent ){	  // var_dump($recent);		?>		<div class="article-tile">		  <div class="thumbnail" style="background-image: url(images/backpacking-europe-packing-list.jpg);">		  <a href="<?php echo get_permalink($recent["ID"]);?>"><img src="<?php 		  $src = wp_get_attachment_image_src( get_post_thumbnail_id( $recent["ID"] ), 'post_thumb' );		  if($src[0])echo $src[0]; else echo esc_url( get_template_directory_uri() ).'/assets/images/article-thumbnail-placeholder.png';?>"></a>		  </div><!-- / thumbnail -->		  <div class="post-date"><?php echo date('F d, Y', strtotime($recent['post_date'])); ?></div>		  		  <div class="title"><a href="<?php echo get_permalink($recent["ID"]);?>"><?php echo  $recent["post_title"];?></a></div>		  <div class="excerpt"><?php echo get_excerpt_by_id($recent["ID"]); ?></div>		  </div><!-- / article-tile -->		  <?php	}	wp_reset_query();?>			  		</div>		  <!-- / pa -->		  		  		  	 <div class="view-all-posts"><a href="<?php echo esc_url( home_url() );?>/category/latest-posts">(view all recent posts)</a></div>	 <div class="pa-heading"><h3>Our Most Popular Articles</h3></div>	 <div class="pa">	    <?php 		$loop  = new WP_Query( array( 		'posts_per_page' => 9, 		'order' => 'DESC',        //'post_type' => 'post',				) );	   while ( $loop->have_posts() ) : $loop->the_post();   //var_dump($recent);		?>		 <div class="article-tile">		 <div class="thumbnail" style="background-image: url(<?php 		 $src = wp_get_attachment_image_src( get_post_thumbnail_id($loop->ID), 'post_thumb', false, '' );		  if($src[0])echo $src[0]; else echo esc_url( get_template_directory_uri() ).'/assets/images/article-thumbnail-placeholder.png';?>);">		 <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/article-thumbnail-placeholder.png"></a>		 </div><!-- / thumbnail -->		 <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>		 </div><!-- / article-tile -->				<?php		endwhile;		wp_reset_query();				?>	 	 </div><!-- / pa -->	 	 	 <div class="intro-section"><?php if ( function_exists( 'ot_get_option' ) ) { echo $test_input = ot_get_option( 'about_author' );}?>	 </div><!-- / intro-section --><?php get_footer(); ?>
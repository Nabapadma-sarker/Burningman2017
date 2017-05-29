<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>


 <div class="page-container">

			<div class="page-content half-width">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>

				<div class="banner-image"><?php the_post_thumbnail(); ?></div>
				<h1 class="post-title"><?php the_title(); ?></h1>

				<div class="post-meta">

					<span class="post-date">Posted on <?php the_date('F d, Y') ?></span> | in <?php echo get_the_category_list(', '); ?> |  <a href="#comments"><?php comments_number( '0', '1', '% responses' ); ?> Comments</a>
				</div><!-- / post-meta -->

				
				 <?php the_content(); ?>
				
				
				<div class="share-options">
					<div class="share-heading">Share this article</div>
					<div class="share-links">
						<a href="https://www.facebook.com/sharer/sharer.php?app_id=1425108201100352&sdk=joey&u=<?php echo get_permalink(); ?>&display=popup&display=page&redirect_uri=<?php echo get_permalink(); ?>" target="_BLANK"><i class="fa fa-facebook"></i> Facebook</a>
						<a href="https://twitter.com/intent/tweet?url=<?php echo get_permalink(); ?>&text=<?php the_title(); ?>" target="_BLANK"><i class="fa fa-twitter"></i> Twitter</a>
						<a href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>" target="_BLANK"><i class="fa fa-google-plus"></i> Google+</a>
						<a href="https://pinterest.com/pin/create/bookmarklet/?media=http://thesavvybackpacker.com/wp-content/uploads/2012/10/eurail-pass-guide.jpg&url=<?php echo get_permalink(); ?>&description=<?php the_title(); ?>" target="_BLANK"><i class="fa fa-pinterest"></i> Pinterest</a>
					</div><!-- / share-links -->
				</div><!-- / share-options -->

      <?php // End of the loop.
		endwhile;
		?>

			
				<div class="subscribe-box">
					<h4>Subscribe to our site!</h4>
				<?php echo do_shortcode( '[mc4wp_form id="55"]' ); ?>
				</div><!-- / subscribe-box -->
				
				
			<?php if ( comments_open() || get_comments_number() ) {
				comments_template();
			} ?>
				

			</div>

	<?php get_sidebar(); ?>		
			
			</div>





<?php get_footer(); ?>

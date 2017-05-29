<?php
/**
 * The template for displaying search results 
 */

get_header(); ?>


		<?php if ( have_posts() ) : ?>

			<div class="page-container">

							<div class="page-content">

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
             ?>
							<div class="archive-post">

								<h1 class="post-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>

								<div class="post-meta">
									<span class="post-date">Posted on <?php the_date('F d, Y') ?></span> | in <?php echo get_the_category_list(', '); ?> |  <a href="<?php echo get_permalink(); ?>#comments"><?php comments_number( '0', '1', '% responses' ); ?> Comments</a>
								</div><!-- / post-meta -->

								<div class="banner-image"><?php the_post_thumbnail(); ?></div>
								<?php the_excerpt(55); ?>

							</div><!-- / archive-post-full -->
            <?php
			// End the loop.
			endwhile;

			// Previous/next page navigation.
						?>
			<div class="pagination">
<?php echo paginate_links(  array(
				'prev_text'          => __( '&laquo; Previous', 'Burningman2017' ),
				'next_text'          => __( 'Next &raquo;', 'Burningman2017' ),				
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( '', 'Burningman2017' ) . ' </span>',

			)  ); ?>

            </div>
				</div><!-- / page-contnt -->				
		</div><!--   / page-container    -->
		<?php
		// If no content, include the "No posts found" template.
		else :
			?>
			  <div class="page-container">

						<div class="page-content">

						<div class="page-content container-404">

						<h1>No Results</h1>

						<p>No results were found for the term you entered. Please update your search and try again.</p>

						</div><!-- / page-content -->
						
				</div><!-- / page-contnt -->

				
		</div><!--   / page-container    -->
       <?php
		endif;
		?>

<?php get_footer(); ?>

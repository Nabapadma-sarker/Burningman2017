<?php
/**
 * The template for the sidebar 
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<div class="sidebar">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- .sidebar .widget-area -->
<?php endif; ?>

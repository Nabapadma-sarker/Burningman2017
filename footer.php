<?php
/**
 * The template footer
 */
?>

<footer>

	<div class="footer-top">

<?php if ( is_active_sidebar( 'sidebar-2' )  ) : ?>
	<div class="col1">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div><!-- / col1 -->
<?php endif; ?>
<?php if ( is_active_sidebar( 'sidebar-3' )  ) : ?>
	<div class="col2">
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div><!-- / col2 -->
<?php endif; ?>
<?php if ( is_active_sidebar( 'sidebar-4' )  ) : ?>
	<div class="col3">
		<?php dynamic_sidebar( 'sidebar-4' ); ?>
	</div><!-- / col3 -->
<?php endif; ?>

	</div><!-- / footer -top -->

	<div class="footer-bottom">

		<div class="social-media">

			See What We're Doing
<nav class="social-media-links">
<?php
if ( function_exists( 'ot_get_option' ) ) {
  $test_input = ot_get_option( 'facebook_link' );
echo '<a href="'.$test_input.'"><i class="fa fa-facebook"></i></a>';
}
if ( function_exists( 'ot_get_option' ) ) {
  $test_input = ot_get_option( 'pinterest_link' );
echo '<a href="'.$test_input.'"><i class="fa fa-pinterest"></i></a>';
}
if ( function_exists( 'ot_get_option' ) ) {
  $test_input = ot_get_option( 'twitter_link' );
echo '<a href="'.$test_input.'"><i class="fa fa-twitter"></i></a>';
}
if ( function_exists( 'ot_get_option' ) ) {
  $test_input = ot_get_option( 'google_plus_link' );
echo '<a href="'.$test_input.'"><i class="fa fa-google-plus"></i></a>';
}
?>
</nav>
		</div><!-- / social-media -->

		<div class="copyright">
<?php if ( function_exists( 'ot_get_option' ) ) {
 echo $test_input = ot_get_option( 'copyright_text' );
}?>
</div>
	</div><!-- / footer-bottom -->

</footer>

</div><!-- / site-container header.php -->

<a href="#" class="btt-button"><i class="fa fa-angle-up"></i></a>


<script type='text/javascript' src='<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/min/all.js'></script>
<script type='text/javascript'>
 jQuery(function(){
   jQuery('a.btt-button').click(function(){
jQuery('body, html').animate({ scrollTop: 0 }, 800); 
 });
 });
</script>
   <?php wp_footer(); ?>
    </body>
</html>



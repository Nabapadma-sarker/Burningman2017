<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Guide To Budget Travel and Backpacking Through Europe - Guide To Backpacking Through Europe | The Savvy Backpacker</title>

<link rel='stylesheet' id='font-awesome-css'  href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='google-web-fonts-css'  href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Lato:900|Montserrat' type='text/css' media='all' />
<link rel='stylesheet' id='formalize/css/formalize.css-css'  href='<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/formalize.css' type='text/css' media='all' />
<link rel='stylesheet' id='main.css-css'  href='<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/main.css' type='text/css' media='all' />
<link rel='stylesheet' id='tweaks.css-css'  href='<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/tweaks.css' type='text/css' media='all' />
<link rel='stylesheet' id='formalize/js/jquery.formalize.min.js-css'  href='<?php echo esc_url( get_template_directory_uri() ); ?>/assets/vendor/formalize/js/jquery.formalize.min.js' type='text/css' media='all' />

<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js?ver=1.11.2'></script>

        <!--[if lt IE 9]>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/vendor/html5shiv.js"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/vendor/respond.js"></script>
        <style>
            .container
        {
            display:table;
            width: 100%;
        }
        .row
        {
            height: 100%;
            display: table-row;
        }
        .col-sm-4
        {
            display: table-cell;
        }
        </style>
        <![endif]-->
	<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/cropped-tsb-fav-icon-32x32.gif" sizes="32x32" />
	<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/cropped-tsb-fav-icon-192x192.gif" sizes="192x192" />
	<link rel="apple-touch-icon-precomposed" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/cropped-tsb-fav-icon-180x180.gif" />
	<meta name="msapplication-TileImage" content="<?php echo esc_url( get_template_directory_uri() ); ?>/images/cropped-tsb-fav-icon-270x270.gif" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
       <header>
			<?php if ( get_header_image() ) : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" ><img src="<?php header_image(); ?>"></a>
			<?php endif; // End header image check. ?>
	

	<?php if ( has_nav_menu( 'primary' ) ) : ?>
		<nav class="main-menu">
			<?php
			
				echo strip_tags(wp_nav_menu( array(
					'theme_location' => 'primary',
					'items_wrap'   => '%3$s',
					'container' => false,
					'echo'   => false,
				 ) ), '<a><i>' ); 
				 
				/* wp_nav_menu( array(
					'theme_location' => 'primary',
					'items_wrap'   => '%3$s',
					'container' => false,
				 ) ); */
			?>
		</nav>
	<?php endif; ?>
	<div class="quick-search-container">
		<div class="quick-search">

			<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<input type="text" value="" name="s" id="s" placeholder="Search" />
				<button type="submit"><i class="fa fa-search"></i></button>
			</form>

		</div><!-- / quick-search -->

	</div><!-- / quick-search-container -->

	
	<a href="#" class="mobile-menu-trigger">
		<span class="mobile-menu-inner"><span></span></span>
	</a>

</header>

<div class="mobile-menu-container"></div><!-- / mobile-menu -->

<div class="site-container">

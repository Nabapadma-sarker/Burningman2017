<?php
function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

	add_theme_support( 'custom-header', array(
		'height'      => 200,
		'width'       => 400,
		'default-image' => get_template_directory_uri() . '/images/logo.gif',
		'uploads'       => true,
	) );
if ( function_exists( 'add_theme_support')){
    add_theme_support( 'post-thumbnails' );
}
add_image_size( 'post_thumb', 280, 160, true); 
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
		register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'Burningman2017' ),
	) );

	
function Burningman2017_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'Burningman2017' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'Burningman2017' ),
		'before_widget' => '',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="sidebar-heading">',
		'after_title'   => '</div><div class="about-content">',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 1', 'Burningman2017' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'Burningman2017' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<div class="heading">',
		'after_title'   => '</div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 2', 'Burningman2017' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'Burningman2017' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<div class="heading">',
		'after_title'   => '</div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 3', 'Burningman2017' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'Burningman2017' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<div class="heading">',
		'after_title'   => '</div>',
	) );
}
add_action( 'widgets_init', 'Burningman2017_widgets_init' );


function my_wp_editor_widget_content_filter( $title ) {
if(empty($title)) 
  return ' ';
else  
  return $title;
}
add_filter( 'widget_title', 'my_wp_editor_widget_content_filter', 10, 1 );




function new_excerpt_more( $more ) {
	return '  ...<a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );




	function get_excerpt_by_id($post_id){
    $the_post = get_post($post_id); //Gets post ID
    $the_excerpt = $the_post->post_content; //Gets post_content to be used as a basis for the excerpt
    $excerpt_length = 20; //Sets excerpt length by word count
    $the_excerpt = strip_tags(strip_shortcodes($the_excerpt)); //Strips tags and images
    $words = explode(' ', $the_excerpt, $excerpt_length + 1);

    if(count($words) > $excerpt_length) :
        array_pop($words);
        array_push($words, '...');
		$link ='<a href="'.get_permalink($recent["ID"]).'">Continue reading</a>';
        array_push($words, $link);
		//$words = $words.get_permalink($recent["ID"]);
        $the_excerpt = implode(' ', $words);
		//$the_excerpt = $words.'<a href="'.get_permalink($recent["ID"]).'">Continue reading</a>';
    endif;

    //$the_excerpt = '<p>' . $the_excerpt . '</p>';

    return $the_excerpt;
}

/*
add_filter( 'dynamic_sidebar_params', 'check_widget_template' );
function check_widget_template( $params ) {
global $wp_registered_widgets;
$settings_obj = $wp_registered_widgets[ $params[0]['widget_id'] ]['callback'][0];
$the_settings = $settings_obj->get_settings();
var_dump($the_settings);
$the_settings = $the_settings[ $params[1]['number'] ];
 //var_dump($the_settings);
if ( $params[0]['after_widget'] == '</div>' && isset($the_settings['title']) && empty($the_settings['title']) )
$params[0]['before_widget'] = '<div class="about-content">';
 else 
 $params[0]['before_widget'] = '';
return $params;
}*/
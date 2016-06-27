<?php

function StemWP_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'bootstrap-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ) );
	// Register the script like this for a theme:
	   //wp_register_script( 'flexslider-script', get_template_directory_uri() . '/flexslider/jquery.flexslider.js', array( 'jquery' ) );
  wp_register_script( 'flexslider-script', get_template_directory_uri() . '/flexslider/jquery.flexslider.js', array(), '2.1', false );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'bootstrap-script');
	wp_enqueue_script( 'flexslider-script');
}
add_action( 'wp_enqueue_scripts', 'StemWP_scripts_with_jquery' );
add_theme_support( 'html5', array( 'search-form' ) );

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

?>

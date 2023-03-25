<?php

if ( ! function_exists( 'wp101_setup' ) ) :
	function wp101_setup() {

    /**
	 * Make theme available for translation.
	 * Translations can be placed in the /languages/ directory.
	 */
		load_theme_textdomain( '101', get_template_directory() . '/languages' );

		/**
		 * Add default posts and comments RSS feed links to <head>.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Enable support for post thumbnails and featured images.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );

          /** tag-title **/
        add_theme_support( 'title-tag' );
        /** custom background **/

		register_nav_menus( array(
			'primary'   => __( 'Primary Menu', '101' )
		) );

        $bg_defaults = array(
        'default-image' => '',
        'default-preset' => 'default',
        'default-size' => 'cover',
        'default-repeat' => 'no-repeat',
        'default-attachment' => 'scroll',
        );

        add_theme_support( 'custom-background', $bg_defaults );
	}
endif; // wp101_setup

add_action( "after_setup_theme", "wp101_setup" );


function wp_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wp_custom_excerpt_length', 999 );



function enqueuing_files(){
    wp_enqueue_style("style", get_stylesheet_uri());
    wp_enqueue_style("bootstrap", "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
}
add_action("wp_enqueue_scripts", "enqueuing_files");




?>


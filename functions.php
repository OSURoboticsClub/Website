<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function wpb_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Home Page Intro Widget', 'wpb' ),
		'id' => 'home-page-intro',
		'description' => __( 'This is the Home page intro widget', 'wpb' ),
		'before_widget' => '<div>',
		'after_widget' => '</div>',
	) );

	register_sidebar( array(
		'name' => __( 'About Page Officers Widget', 'wpb' ),
		'id' => 'about-page-officers',
		'description' => __( 'This is a the About page officers widget', 'wpb' ),
		'before_widget' => '<div>',
		'after_widget' => '</div>',
	) );

	register_sidebar( array(
		'name' => __( 'Aerial Social Media', 'wpb' ),
		'id' => 'aerial-social-media',
		'description' => __( 'This is the aerial social media widget', 'wpb' ),
		'before_widget' => '<div style="margin-top: 20px !important;">',
		'after_widget' => '</div>',
	) );

	register_sidebar( array(
		'name' => __( 'Mars Rover Social Media', 'wpb' ),
		'id' => 'mars-rover-social-media',
		'description' => __( 'This is the mars rover social media widget', 'wpb' ),
		'before_widget' => '<div style="margin-top: 20px !important;">',
		'after_widget' => '</div>',
	) );

	register_sidebar( array(
		'name' => __( 'Underwater Social Media', 'wpb' ),
		'id' => 'underwater-social-media',
		'description' => __( 'This is the underwater social media widget', 'wpb' ),
		'before_widget' => '<div style="margin-top: 20px !important;">',
		'after_widget' => '</div>',
	) );
}

add_action( 'widgets_init', 'wpb_widgets_init' );
?>

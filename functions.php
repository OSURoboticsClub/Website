<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function wpb_widgets_init() {

	register_sidebar( array(
		'name' => __( 'About Page Officers Widget', 'wpb' ),
		'id' => 'about-page-officers',
		'description' => __( 'This is a the About page officers widget', 'wpb' ),
		'before_widget' => '<div>',
		'after_widget' => '</div>',
	) );
	}

add_action( 'widgets_init', 'wpb_widgets_init' );
?>

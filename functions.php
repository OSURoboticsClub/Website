<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function wpb_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Sample Widget', 'wpb' ),
		'id' => 'sample-widget',
		'description' => __( 'This is a sample widget', 'wpb' ),
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h1>',
		'after_title' => '</h1>',
	) );
	}

add_action( 'widgets_init', 'wpb_widgets_init' );
?>

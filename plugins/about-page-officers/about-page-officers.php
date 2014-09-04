<?php
/*
Plugin Name: About Page Officer Plugin
Description: Plugin widget used to show an officer badge
Version: 1.0
Author: John Zeller
Author URI: http://www.johnzeller.com/
License: GPL2
*/
class about_page_officer_widget extends WP_Widget {

	// constructor
    function about_page_officer_widget() {
        parent::WP_Widget(false, $name = __('About Page Officer Widget', 'wp_widget_plugin') );
    }

	// widget form creation
	function form($instance) {

	// Check values
	if( $instance) {
	     $image = esc_attr($instance['image']);
	     $fullname = esc_attr($instance['fullname']);
	     $email = esc_attr($instance['email']);
	     $position = esc_attr($instance['position']);
	} else {
	     $image = '';
	     $fullname = '';
	     $email = '';
	     $position = '';
	}
	?>


	<p>
	<label for="<?php echo $this->get_field_id('image'); ?>"><?php _e('Image URL', 'wp_widget_plugin'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('image'); ?>" type="text" value="<?php echo $image; ?>" />
	</p>

	<p>
	<label for="<?php echo $this->get_field_id('fullname'); ?>"><?php _e('Full Name', 'wp_widget_plugin'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('fullname'); ?>" name="<?php echo $this->get_field_name('fullname'); ?>" type="text" value="<?php echo $fullname; ?>" />
	</p>

	<p>
	<label for="<?php echo $this->get_field_id('email'); ?>"><?php _e('Email', 'wp_widget_plugin'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="text" value="<?php echo $email; ?>" />
	</p>

	<p>
	<label for="<?php echo $this->get_field_id('position'); ?>"><?php _e('Position', 'wp_widget_plugin'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('position'); ?>" name="<?php echo $this->get_field_name('position'); ?>" type="text" value="<?php echo $position; ?>" />
	</p>
	<?php
	}

	// update widget
	function update($new_instance, $old_instance) {
	      $instance = $old_instance;
	      // Fields
          $instance['image']    = strip_tags($new_instance['image']);
	      $instance['fullname'] = strip_tags($new_instance['fullname']);
	      $instance['email'] = strip_tags($new_instance['email']);
	      $instance['position'] = strip_tags($new_instance['position']);
	     return $instance;
	}

	// display widget
	function widget($args, $instance) {
	   extract( $args );
	   // these are the widget options
       $image = $instance['image'];
	   $fullname = apply_filters('widget_fullname', $instance['fullname']);
	   $email = $instance['email'];
	   $position = $instance['position'];
	   echo $before_widget;

	   // Check if image is set
	   if( $image ) {
		   echo "<img class='img-thumbnail' src='" .$image. "' alt='" .$image. "' style='width: 140px; height: 140px;'>";
	   }

	   // Check if email and fullname are set
	   if ( $email and $fullname ) {
	      echo '<p><a class="btn btn-primary" href="'.$email.'" role="button">'.$fullname.'</a></p>';
	   }

	   // Check if position is set
	   if( $email and $position ) {
	     echo '<p>'.$position.'</p>';
	   }
	   echo $after_widget;
	}
}

// register widget
add_action('widgets_init', create_function('', 'return register_widget("highlight_widget");'));
?>
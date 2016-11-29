<?php
/**
 * Plugin Name: RHD Separator Widget
 * Description: A simple CSS-selectable <hr> separator for sidebars.
 * Author: Roundhouse Designs
 * Author URI: http://roundhouse-designs.com
 * Version: 0.1
**/

/* ==========================================================================
	Widget
   ========================================================================== */

/**
 * RHD_Separator_Widget class.
 *
 * @extends WP_Widget
 */
class RHD_Separator_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
	 		'rhd_separator_widget', // Base ID
			__( 'RHD Separator Widget', 'rhd' ), // Name
			array( 'description' => __( 'A simple CSS-selectable <hr> separator for sidebars.', 'rhd' ), ) // Args
		);
	}

	public function widget( $args, $instance ) {
		echo $before_widget;

		echo '<hr class="rhd-widget-sep" style="height: 2px; background-color: #466fa4; border-width: 0;">';

		echo $after_widget;
	}

	public function form( $instance ) {
		// outputs the options form on admin
		echo "<p>Widget separator line.</p>";
	}
}


/**
 * Register RHD_Separator_Widget
 *
 * @access public
 * @return void
 */
function register_rhd_separator_widget()
{
    register_widget( 'rhd_separator_widget' );
}
add_action( 'widgets_init', 'register_rhd_separator_widget' );
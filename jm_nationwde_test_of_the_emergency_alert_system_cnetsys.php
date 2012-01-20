<?php
	/*
	Plugin Name: Nationwide Test of the Emergency Alert System
	Plugin URI: http://shelbytactical.com
	Description: The Nationwide Test of the Emergency Alert System from the U.S. Department of Homeland Security.
	Version: 1.0
	Author: Josten Moore
	Author URI: http://shelbytactical.com
	*/
	
	//The output that the widget is going to display
	$widget_output = "<iframe width=\"220\" height=\"390\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" frameborder=\"0\" src=\"http://www.fema.gov/help/widgets/eastest.html\" title=\"Nationwide Test of the Emergency Alert System\"></iframe>";
	$title = "Nationwide Test of the Emergency Alert System";
	$title_stripped = str_replace(" ", "-", $title);
	
	class Widget_Nationwide_Test extends WP_Widget {
		function Widget_Nationwide_Test() {
			global $title;
			global $title_stripped;
		
			$widget_options = array(
				'classname' => $title_stripped,
				'description' => __("$title")
			);
			$control_options = array(
				'height' => 390,
				'width' => 220,
			);
			$this->WP_Widget("Nationwide-test", __("$title"), $widget_options, $control_options);
		}
		
		//What is displayed in the widget
		function widget($args, $instance) {
			global $widget_output;
			
			_e($widget_output);
		}
		
		//Form configuration for the widget
		function form($instance){ _e("No configuration necessary!"); }
		
		//Saves configuration information for single instance
		function update($new_instance, $old_instance) {}
	}

	//initialization function for the widget
	function jm_ntoteasc_init() {
		global $title_stripped;
		register_widget("Widget_Nationwide_test");
	}

	add_action("widgets_init", "jm_ntoteasc_init");
?>
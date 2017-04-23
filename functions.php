<?php
	
	// Add in stylesheets
	function murrietamusicstudio_styles() {
		
		wp_register_style('googlefonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600', array(), '1.0.0');
		
		wp_register_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '4.7.0');
		
		wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '2.0');
		
		wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0');
		
		
		
		// Enqueue the styles and JS
		wp_enqueue_style('googlefonts');
		wp_enqueue_style('fontawesome');
		wp_enqueue_style('normalize');
		wp_enqueue_style('style');
		
		
		
	}
	
	add_action('wp_enqueue_scripts', 'murrietamusicstudio_styles');
	
	
	
	
	
	
?>
<?php
	
	// Add in stylesheets
	function murrietamusicstudio_styles() {
		
		wp_register_style('googlefonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600', array(), '1.0.0');
		
		wp_register_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '4.7.0');
		
		wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '2.0');
		
		wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0');
		
		wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous', array(), '3.2.1');
		
		wp_register_script('jqueryrotate', get_template_directory_uri() . '/js/jqueryrotate.js', array('jquery'), '2.3', true);
		
		wp_register_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);
		
		
		// Enqueue the styles and JS
		wp_enqueue_style('googlefonts');
		wp_enqueue_style('fontawesome');
		wp_enqueue_style('normalize');
		wp_enqueue_style('style');
		
		wp_enqueue_script('jquery');
		wp_enqueue_script('jqueryrotate');
		wp_enqueue_script('script');
		
		
	}
	
	add_action('wp_enqueue_scripts', 'murrietamusicstudio_styles');
	
	
	
	
	
	
?>
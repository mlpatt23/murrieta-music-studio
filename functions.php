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
	
	
	// Add menus 
	function murrietamusicstudio_menus() {
		register_nav_menus(array(
			'mobile-header-menu' => __('Mobile Header Menu', 'murrietamusicstudio'),
			'header-menu' => __('Header Menu', 'murrietamusicstudio')
		));
	}
	
	add_action('init', 'murrietamusicstudio_menus');
	
	
	// Add in custom post type in ACF for Interview Questions (About Page)
	function murrietamusicstudio_interview_questions() {
		$args = array(
			"labels" => array(
				"name" => __( "Interview Questions" ),
				"singular_name" => __( "Interview Question" )
			),
			"description" => __( "Description", "murrietamusicstudio" ),
			
			"public" => true,
			"publicly_queryable" => true,
			"rewrite" => array( "slug" => "interview-questions"),
			"show_ui" => true,
			"menu_postion" => 20
			
		);
		
		register_post_type( "interview-questions", $args);
	}
	
	add_action('init', 'murrietamusicstudio_interview_questions');
	
	
	// Add in custom post type in ACF for FAQs (Lessons FAQs Page)
	function murrietamusicstudio_faqs() {
		$args = array(
			"labels" => array(
				"name" => __( "FAQs" ),
				"singular_name" => __( "FAQ" )
			),
			"description" => __( "Description", "murrietamusicstudio" ),
			"public" => true,
			"publicly_queryable" => true,
			"rewrite" => array( "slug" => "faqs" ),
			"show_ui" => true,
			"menu_position" => 30
		);
		
		
		register_post_type( "faqs", $args);
	}
	
	add_action('init', 'murrietamusicstudio_faqs');
	
	
	// Add in custom post type in ACF for Services (Lessons & Services Page)
	function murrietamusicstudio_services() {
		$args = array(
			"labels" => array(
				"name" => __( "Services" ),
				"singular_name" => __( "Service" )
			),
			"description" => __( "Description", "murrietamusicstudio" ),
			"public" => true,
			"publicly_queryable" => true,
			"rewrite" => array( "slug" => "services" ),
			"show_ui" => true,
			"menu_position" => 40
		);
		
		
		register_post_type( "services", $args);
	}
	
	add_action('init', 'murrietamusicstudio_services');
	
	
	// Add in custom post type in ACF for Tuition Table (Tuition & Scheduling Page)
	function murrietamusicstudio_services_highlights() {
		$args = array(
			"labels" => array(
				"name" => __( "Services Highlights" ),
				"singular_name" => __( "Service Highlights" )
			),
			"description" => __( "Description", "murrietamusicstudio" ),
			"public" => true,
			"publicly_queryable" => true,
			"rewrite" => array( "slug" => "services-highlights" ),
			"show_ui" => true,
			"menu_position" => 50
		);
		
		
		register_post_type( "services-highlights", $args);
	}
	
	add_action('init', 'murrietamusicstudio_services_highlights');
	
	
?>
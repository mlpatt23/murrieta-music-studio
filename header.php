<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welcome to Murrieta Music Studio!</title>
    <meta name="description" content="Murrieta Music Studio offers quality strings instructions in Mesa and Phoenix, Arizona. ">
	<meta name="keywords" content="Mercedes, Murrieta, Strings, Instructor, Violin, Viola, Cello, Studio, Murrieta Music Studio, Lessons, Music Lessons, Strings Lessons, Violin Lessons, Viola Lessons, Cello Lessons, Phoenix, Mesa, Arizona">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="top-bar" id="top"></div>
	
	<div class="wrapper">
		<header>
			<figure>
				<a href="<?php echo get_permalink(5); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/swirl.png" class="logo" alt="Murrieta Music Studio Logo"></a>
			</figure>
		
			<div class="decoration"><h1>Murrieta Music Studio</h1></div>
		</header>
	</div> <!-- wrapper -->
	
	<?php
		$args = array(
			'theme_location' => 'mobile-header-menu',
			'container' => 'nav',
			'container_class' => 'mobile-site-nav'
		);
		
		wp_nav_menu($args);
	?>
	
	<?php
		$args = array(
			'theme_location' => 'header-menu',
			'container' => 'nav',
			'container_class' => 'site-nav'
		);
		
		wp_nav_menu($args);
	?>
	
	<div class="wrapper">
		<!-- hide on mobile view -->
		<div class="photo-slider">
			<img src="<?php echo get_template_directory_uri(); ?>/img/photo-slider.jpg" alt="Strings Students Photos">
		</div> <!-- photo-slider -->
	</div> <!-- wrapper -->
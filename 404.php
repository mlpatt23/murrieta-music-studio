<?php 
/*
 * Template: 404 page
 *
 */

get_header(); ?>


	<div class="wrapper">
		<main>
			<div class="heading">
				<h1>Page Not Found</h1>
			</div> <!-- heading -->
		
			<p class="more-info">Oops! That page doesn't exist!</p>
			
			<p class="more-info">Maybe you'd like to check out some common <a href="<?php echo get_permalink(13); ?>">FAQs</a>?</p>
			
			<p class="more-info">Or see what kinds of <a href="<?php echo get_permalink(9); ?>">services</a> I offer?</p>
			
			<p class="more-info">Or <a href="<?php echo get_permalink(17); ?>">contact me here</a>.</p>
		
		</main>
	</div> <!-- wrapper -->
		

		
<?php get_footer(); ?>

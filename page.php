<?php get_header(); ?>

	<?php if ( have_posts() ) :
	
		while(have_posts()) : the_post(); ?>
			<div class="wrapper">
				<main>
					<div class="heading">
						<h1><?php the_title(); ?></h1>
					</div> <!-- heading -->
			
					<?php the_content(); ?>
			
				</main>
			</div> <!-- wrapper -->
		
		<?php endwhile; ?>
		
	<?php endif; ?>
		
<?php get_footer(); ?>

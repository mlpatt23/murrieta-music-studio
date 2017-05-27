<?php get_header(); ?>

	<div class="wrapper">
		<main class="single-post">
			<div class="heading">
				<h1><?php echo get_the_title(84); ?></h1>
			</div> <!-- heading -->
			
			<?php if ( have_posts() ) :
				while(have_posts()) : the_post(); ?>
			
					<article class="blog-post">
						<h2><?php the_title(); ?></h2>
						
						<div class="blog-info">
							<p class="date"><?php the_time('F j, Y'); ?> |</p>
							<p class="category"><?php the_category(', '); ?></p>
						</div> <!--blog-info -->
				
						<?php the_content(); ?>
						
					</article> <!-- blog-post -->
			
				<?php endwhile; ?>
			<?php endif; ?>
			
		</main>
	</div> <!-- wrapper -->

<?php get_footer(); ?>
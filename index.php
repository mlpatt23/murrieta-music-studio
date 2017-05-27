<?php get_header(); ?>

	
	<div class="wrapper">
		<main>
			<div class="heading">
				<h1><?php echo get_the_title(84); ?></h1>
			</div> <!-- heading -->
			
			<h2>Recent Posts</h2>
			
			<?php if ( have_posts() ) :
				while(have_posts()) : the_post(); ?>
			
					<article class="blog-post">
						<h3>
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h3>
						
						<div class="blog-info">
							<!-- Include Date and Category Info -->
						</div> <!--blog-info -->
				
						<?php the_excerpt(); ?>
						
						<a href="<?php the_permalink(); ?>">Read More...</a>
					</article> <!-- blog-post -->
			
				<?php endwhile; ?>
			<?php endif; ?>
			
		</main>
	</div> <!-- wrapper -->
		
		

<?php get_footer(); ?>
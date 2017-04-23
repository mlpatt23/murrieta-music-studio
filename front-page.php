<?php get_header(); ?>

	<div class="wrapper">
		<main id="welcome">
			<div class="heading">
				<h1><?php the_title(); ?></h1>
			</div> <!-- heading -->

				<?php 
					
					$args = array(
						'pagename' => 'home'
					);
					
					$the_content_2 = get_field('the_content_2');
					$image_1 = get_field('image_1');
					$image_2 = get_field('image_2');
					$size = "medium";
				
					query_posts($args);
				
					if ( have_posts() ) : while(have_posts()) : the_post(); ?>
					
						<div>
							<figure id="mercedes-img">
								<?php echo wp_get_attachment_image($image_1, $size); ?>
							</figure>
					
		
							<p><?php the_content(); ?></p>
						</div>
						
						<div>
							<!-- hide on mobile view -->
							<figure id="clefs-img">
								<?php echo wp_get_attachment_image($image_2, $size); ?>
							</figure>
							
				
							<p><?php echo $the_content_2; ?></p>
		
						</div>

					<?php endwhile; ?>
				<?php endif; ?>
		
		</main>
	</div> <!-- wrapper -->
<?php get_footer(); ?>

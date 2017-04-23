<?php get_header(); ?>

	<?php if ( have_posts() ) :
	
		while(have_posts()) : the_post(); ?>
		<div class="wrapper">
			<main>
				<div class="heading">
					<h1><?php the_title(); ?></h1>
				</div> <!-- heading -->
			
			
				<div class="two-col">
					<div class="col">
						<section class="contact-form">
							<h2>Have a question?</h2>
				
							<p><a href="tel:1-928-362-2704" class="contact-link">1.928.362.2704</a></p>
							<p><a href="https://www.facebook.com/murrietamusicstudio" class="contact-link" target="_blank">Visit me on Facebook!</a><p>
				
							<?php the_content(); ?>
						</section> <!-- contact-form -->
					</div> <!-- col -->
				
					<div class="col">
						<section class="studio-locations">
							<h2>Studio Locations</h2>
						
						
							<?php 
				
							$args = array(
								'post_type' => 'studio-locations',
								'order' => 'ASC'
							);
			
							$locations = new wp_query($args);
				
				
							if ( $locations -> have_posts() ) : while( $locations -> have_posts()) : $locations -> the_post(); 
					
								$address_1 = get_field('address_line_1');
								$address_2 = get_field('address_line_2'); ?>
					
							<div class="studio-location">
								<h4><?php the_title(); ?></h4>
								<p><?php echo $address_1; ?></p>
								<p><?php echo $address_2; ?></p>
				
								<div class="map-container">
									<?php the_content(); ?>
								</div> <!-- map-container -->
							</div> <!-- studio-location -->
					
							<?php endwhile; wp_reset_postdata(); ?>
							<?php endif; ?>
					
						</section> <!-- studio-locations -->
					</div> <!-- col -->		
				</div> <!-- two-col -->
			
			
		
				<?php the_content(); ?>
		
			</main>
		</div> <!-- wrapper -->
		
		<?php endwhile; ?>
	
	<?php endif; ?>
		
<?php get_footer(); ?>

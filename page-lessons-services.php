<?php 
/*
* Template Name: Q & A
*/

get_header(); ?>

	
		<div class="wrapper">
			<main>
				<div class="heading">
					<h1><?php the_title(); ?></h1>
				</div> <!-- heading -->
			
				<div class="two-col">
					
					<div class="col">
						<?php 
							
							$args = array(
								'post_type' => 'services',
								'posts_per_page' => 2,
								'order' => 'ASC'
							);
						
						query_posts($args);
						
						$firstPosts = array();
						
						
						if ( have_posts() ) : while(have_posts()) : the_post(); ?>
						
						<?php $firstPosts[] = $post->ID; ?>
						
							<section class="service">
								<h2 class="mobile-h2">
									<a href="#"><?php the_title(); ?> <i class="fa fa-angle-right"></i></a>
								</h2>
								<h2 class="non-mobile-h2"><?php the_title(); ?></h2>
								
								<div class="service-description">
									<?php the_content(); ?>
									
									<p>See <a href="<?php echo get_permalink(11); ?>">Tuition and Scheduling</a> for pricing and scheduling information.</p>
								</div> <!-- service-description -->
							</section> <!-- service -->
						<?php endwhile; wp_reset_postdata(); ?>
						<?php endif; ?>
					</div> <!-- col -->
				
				
					<div class="col">
						<?php 
							
							$args = array(
								'post_type' => 'services',
								'post__not_in' => $firstPosts,
								'posts_per_page' => 2,
								'order' => 'ASC'
							);
						
						query_posts($args);
						
						
						if ( have_posts() ) : while(have_posts()) : the_post(); ?>
							<section class="service">
								<h2 class="mobile-h2">
									<a href="#"><?php the_title(); ?> <i class="fa fa-angle-right"></i></a>
								</h2>
								<h2 class="non-mobile-h2"><?php the_title(); ?></h2>
								
								<div class="service-description">
									<?php the_content(); ?>
									
									<p>See <a href="<?php echo get_permalink(11); ?>">Tuition and Scheduling</a> for pricing and scheduling information.</p>
								</div> <!-- service-description -->
							</section> <!-- service -->
						<?php endwhile; wp_reset_postdata(); ?>
						<?php endif; ?>
					</div> <!-- col -->
				
				</div> <!-- two-col -->

			</main>
		</div> <!-- wrapper -->
		

		
<?php get_footer(); ?>

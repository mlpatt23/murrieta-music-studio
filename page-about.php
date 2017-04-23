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
								'post_type' => 'interview-questions',
								'p' => 35
							);
						
						query_posts($args);
						
						$firstPosts = array();
						
						
						if ( have_posts() ) : while(have_posts()) : the_post(); ?>
						
						<?php $firstPosts[] = $post->ID; ?>
						
							<section class="question">
								<h3 class="mobile-h3">
									<a href="#"><?php the_title(); ?> <i class="fa fa-angle-right"></i></a>
								</h3>
								<h3 class="non-mobile-h3"><?php the_title(); ?></h3>
								
								<div class="answer">
									<?php the_content(); ?>
								</div> <!-- answer -->
							</section> <!-- question -->
						<?php endwhile; wp_reset_postdata(); ?>
						<?php endif; ?>
					</div> <!-- col -->
				
				
					<div class="col">
						<?php 
							
							$args = array(
								'post_type' => 'interview-questions',
								'post__not_in' => $firstPosts,
								'order' => 'ASC'
							);
						
						query_posts($args);
						
						
						if ( have_posts() ) : while(have_posts()) : the_post(); ?>
							<section class="question">
								<h3 class="mobile-h3">
									<a href="#"><?php the_title(); ?> <i class="fa fa-angle-right"></i></a>
									</h3>
								<h3 class="non-mobile-h3"><?php the_title(); ?></h3>
								
								<div class="answer">
									<?php the_content(); ?>
								</div> <!-- answer -->
							</section> <!-- question -->
						<?php endwhile; wp_reset_postdata(); ?>
						<?php endif; ?>
					</div> <!-- col -->
				
				</div> <!-- two-col -->

			</main>
		</div> <!-- wrapper -->
		

		
<?php get_footer(); ?>

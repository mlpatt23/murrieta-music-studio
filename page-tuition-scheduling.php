<?php get_header(); ?>
	
	<?php while(have_posts()) : the_post(); ?>
	
	<div class="wrapper">
		<main>
			<div class="heading">
				<h1><?php the_title(); ?></h1>
			</div> <!-- heading -->
		
			<div class="schedule"><?php the_content(); ?></div>
			
			
			<!-- mobile version, hide on tablet/desktop views -->
			<section class="mobile-table">
				<h2>Services</h2>
				
				
				
				<!-- First wp_query for Private Lessons table row -->
				<?php 
				
				$args = array(
					'post_type' => 'services-highlights',
					'p' => 54
				);
			
				$services = new wp_query($args);
			
				$firstPosts = array();
				
				
				if ( $services -> have_posts() ) : while( $services -> have_posts()) : $services -> the_post(); 
				
					$firstPosts[] = $post->ID; 
					
					$private_lesson_length_1 = get_field('private_lesson_length_1');
					$private_lesson_length_2 = get_field('private_lesson_length_2');
					$private_lesson_length_3 = get_field('private_lesson_length_3');
					$price_1 = get_field('price_1');
					$price_2 = get_field('price_2');
					$price_3 = get_field('price_3');  ?>
				
					<section class="table-service">
						<h4><?php the_title(); ?></h4>
						<table>
							<tr>
								<td><?php echo $private_lesson_length_1; ?></td>
								<td><?php echo $price_1; ?></td>
							</tr>
			
							<tr>
								<td><?php echo $private_lesson_length_2; ?></td>
								<td><?php echo $price_2; ?></td>
							</tr>
			
							<tr>
								<td><?php echo $private_lesson_length_3; ?></td>
								<td><?php echo $price_3; ?></td>
							</tr>
						</table>
		
						<?php the_content(); ?>
					</section> <!-- table-service -->
		
				<?php endwhile; wp_reset_postdata(); ?> <!-- End of Private Lessons Table Row -->
				<?php endif; ?>
				
				
				
				<!-- Second wp_query for all table rows except Private Lessons -->
				<?php 
				
				$args = array(
					'post_type' => 'services-highlights',
					'post__not_in' => $firstPosts,
					'order' => 'ASC'
				);
			
				$services = new wp_query($args);
				
				
				if ( $services -> have_posts() ) : while( $services -> have_posts()) : $services -> the_post(); 
				
					$price_1 = get_field('price_1'); ?>
				
					<section class="table-service">
						<h4><?php the_title(); ?></h4>
			
						<p><?php echo $price_1; ?></p>

						<?php the_content(); ?>
					</section> <!-- table-service -->
		
				<?php endwhile; wp_reset_postdata(); ?> <!-- End of all other table rows -->
				<?php endif; ?>
				
			</section> <!--mobile-table -->
			
			
			
			<!-- tablet/desktop version, hide on mobile view -->
			<section class="non-mobile-table">
				<table>
					
					<thead>
						<tr>
							<th>Service</th>
							<th>Price</th>
							<th>Highlights</th>
						</tr>
					</thead>
					
					<tbody>
						<!-- First wp_query for Private Lessons table row -->
						<?php 
				
						$args = array(
							'post_type' => 'services-highlights',
							'p' => 54
						);
			
						$services = new wp_query($args);
			
						$firstPosts = array();
				
				
						if ( $services -> have_posts() ) : while( $services -> have_posts()) : $services -> the_post(); 
				
							$firstPosts[] = $post->ID; 
					
							$private_lesson_length_1 = get_field('private_lesson_length_1');
							$private_lesson_length_2 = get_field('private_lesson_length_2');
							$private_lesson_length_3 = get_field('private_lesson_length_3');
							$price_1 = get_field('price_1');
							$price_2 = get_field('price_2');
							$price_3 = get_field('price_3');  ?>
							
							
							<tr>
								<td><span class="table-service"><?php the_title(); ?></span><br>
									<div class="prices">	
										<p><?php echo $private_lesson_length_1; ?></p>
								
										<p><?php echo $private_lesson_length_2; ?></p>
								
										<p><?php echo $private_lesson_length_3; ?></p>
									</div>
								</td>
							
								<td>
									<div class="prices breakdown">
										<p><?php echo $price_1; ?></p>
								
										<p><?php echo $price_2; ?></p>
								
										<p><?php echo $price_3; ?></p>
									</div>	
								</td>
						
								<td><br><?php the_content(); ?></td>
							</tr>
						
						<?php endwhile; wp_reset_postdata(); ?> <!-- End of Private Lessons Table Row -->
						<?php endif; ?>
						
						<!-- Second wp_query for all table rows except Private Lessons -->
						<?php 
				
						$args = array(
							'post_type' => 'services-highlights',
							'post__not_in' => $firstPosts,
							'order' => 'ASC'
						);
			
						$services = new wp_query($args);
				
				
						if ( $services -> have_posts() ) : while( $services -> have_posts()) : $services -> the_post(); 
				
							$price_1 = get_field('price_1'); ?>
							
							<tr>
								<td class="table-service"><?php the_title(); ?></td>
								<td class="service-price"><?php echo $price_1; ?></td>
								<td><?php the_content(); ?></td>
							</tr>
							
						<?php endwhile; wp_reset_postdata(); ?> <!-- End of all other table rows -->
						<?php endif; ?>
						
					</tbody>
		
				</table>
				
			</section> <!-- non-mobile-table -->
			
			<p class="more-info">For more information about these services, please see <a href="<?php echo get_permalink(9); ?>">Lessons and Other Services</a>.</p>
		
		</main>
	</div> <!-- wrapper -->

	<?php endwhile; ?>
		
<?php get_footer(); ?>

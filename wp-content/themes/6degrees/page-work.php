<?php
/*	
	Template Name: work
 */
?>

<?php get_header(); ?>

	<div class="service-header">
		<h1><?php the_title(); ?></h1>
	</div>

	<div class="container">
		<div class="page_content">
			
			<?php

				$args = array(
					'post_type' => 'portfolio'
				);

				$query = new WP_Query( $args );

				$count = 0;
				$closeTag = 0;
				$postCount = $query->post_count;

			?>

			<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

				<?php

					if($count % 2 == 0){
						echo '<div class="row work_row">';
					}else{
						$closeTag = 1;
					}

				?>

				<div class="col-sm-6">
					<!-- <a href="<?php // the_permalink(); ?>"> -->
						<div class="work_item" id="<?php echo 'workitem_' . $count; ?>">

							<h2><?php the_title(); ?></h2>
							<?php the_post_thumbnail(); ?>
							
							<!-- <table class="hidden-xs">
								<tr>
									<th>Goal: </th>
									<td><?php // the_field( 'short_goal' ); ?></td>
								</tr>
								<tr>
									<th>Results: </th>
									<td><?php // the_field( 'short_result' ); ?></td>
								</tr>
								<tr>
									<th>Services: </th>
									<td><?php // the_field( 'approach' ); ?></td>
								</tr>
							</table> -->

						</div>
					<!-- </a> -->	
				</div>

				<?php

					if($closeTag == 1){
						echo '</div>';
						$closeTag = 0;
					}

					$count++;

				?>

			<?php endwhile; endif; wp_reset_postdata(); ?>
		
			<?php if( $postCount % 2 != 0 ){ echo '</div>'; } ?>

		</div>
	</div>

<?php get_footer(); ?>
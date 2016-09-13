<?php get_header(); ?>

	<div class="service-header">
		<h1><?php the_title(); ?></h1>
	</div>

	<div class="container">
		<div class="page_content">
			<?php
				// if (have_posts()) : while (have_posts()) : the_post();
				// 	the_content();
				// endwhile; endif;
			?>

			<?php 

				// $args = array(
				// 	'post_type' => 'video'
				// );

				// $query = new WP_Query( $args );

			?>

			<?php if( get_field('row_1_h2') ) { ?>

				<div class="row">
					<div class="col-sm-6">
						<h2><?php the_field( 'row_1_h2' ); ?></h2>
						<?php the_field( 'row_1_text' ); ?>
					</div>
					<div class="hidden-xs col-sm-6">
						<?php 
							$img = get_field( 'row_1_img' ); 
							echo '<img src="' . $img['url'] . '">';
						?>
					</div>
				</div>

			<?php } ?>
			<?php if( get_field('row_2_h2') ) { ?>

				<div class="row">
					<div class="col-sm-6 hidden-xs">
						<?php 
							$img = get_field( 'row_2_img' ); 
							echo '<img src="' . $img['url'] . '">';
						?>
					</div>
					<div class="col-sm-6">
						<h2><?php the_field( 'row_2_h2' ); ?></h2>
						<?php the_field( 'row_2_text' ); ?>
					</div>
				</div>

			<?php } ?>
			<?php if( get_field('row_3_h2') ) { ?>

				<div class="row">
					<div class="col-sm-6">
						<h2><?php the_field( 'row_3_h2' ); ?></h2>
						<?php the_field( 'row_3_text' ); ?>
					</div>
					<div class="col-sm-6 hidden-xs">
						<?php 
							$img = get_field( 'row_3_img' ); 
							echo '<img src="' . $img['url'] . '">';
						?>
					</div>
				</div>

			<?php } ?>

		</div>
	</div>

<?php get_footer(); ?>
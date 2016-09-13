<?php get_header(); ?>

<div class="service-header">
	<h1><?php the_title(); ?></h1>
</div>

<div class="container">

		<section id="single" class="work_single">

<!-- 			<div class="mob_side_head">
				<img id="burger_side" src="<?php // bloginfo('template_directory'); ?>/img/burger3.png">
				<h3>Related Posts</h3>
			</div>
 -->
			<div class="mob_side_head">
				<!-- <img id="burger_side" src="<?php // bloginfo('template_directory'); ?>/img/burger3.png">
				<h3>Related Posts</h3> -->
				<a href="<?php bloginfo('url');?>/work">Back to work</a>
			</div>

			<ul class="list" id="mob_work_related">
				<?php
					$cat = get_the_category(); 
					$cat = $cat[0]->cat_name; 

					query_posts('category_name=' . $cat);
				?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; else : ?>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
			</ul>
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="work_sigle_head">
					<div class="row">
						<div class="col-sm-5">

							<?php the_post_thumbnail(); ?>

						</div>
						<div class="col-sm-7">
							<div class="summary">		
								<h2><?php the_field( 'sub_heading' ); ?></h2>			
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3">
						<div class="work_sidebar">

							<h3 class="hidden-xs">Related Guides</h3>	

							<?php

								$cat = get_the_category(); 
								$cat = $cat[0]->cat_name; 

								$args = array(
									'post_type' => 'pdfs',
									'category_name' => $cat
								);

								$query = new WP_Query( $args );

							?>

							<div class="pdfs">

								<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

									<h4><?php the_title(); ?></h4>
									<a href="<?php the_field( 'pdf_upload' ); ?>">
										<img src="<?php the_field( 'pdf_img' ); ?>">
									</a>

								<?php endwhile; endif; wp_reset_postdata(); ?>

							</div>

							<div class="mob_pdfs">

								<?php

									$args = array(
										'post_type' => 'pdfs',
										'category_name' => $cat,
										'showposts' => 1
									);

									$query = new WP_Query( $args );

								?>

								<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

									<h3>Get The Guide</h3>
									<a href="<?php the_field( 'pdf_upload' ); ?>">Download Here</a>

								<?php endwhile; endif; wp_reset_postdata(); ?>

							</div>

							<div class="related_posts" id="related_posts">

								<h3 class="hidden-xs">Related Posts</h3>

								<?php

									$args = array(
										'post_type' => 'portfolio',
										'category_name' => $cat  
									);

									$query = new WP_Query( $args );

								?>

								<ul class="list">

								<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

									<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

								<?php endwhile; endif; wp_reset_postdata(); ?>

								</ul>

							</div>

						</div>
					</div>
					<div class="col-sm-9">
						<div class="work_info">
							<div class="goals">
								<h4>Goals: </h4>
								<?php the_field( 'goal' ); ?>
							</div>
							<div class="approach">
								<h4>Approach: </h4>
								<?php the_field( 'approach' ); ?>
							</div>
							<div class="results">
								<h4>Results: </h4>
								<?php the_field( 'result' ); ?>
							</div>
							<div class="more_details">
								<?php the_field( 'more_details' ); ?>
							</div>
						</div>
					</div>
				</div>

			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
	
		</section>
	
</div>

<script>
                
    jQuery(document).ready(function($){

        var burger = $('#burger_side');
        var mobSideNav = $('#mob_work_related');
        var open2 = false;

        burger.on('click', function(){
            
            if(open2){

                // mobNav.css('display', 'none');
                mobSideNav.hide(200);
                open2 = false;

            }else{

                // mobNav.css('display', 'inline-block');
                mobSideNav.show(200);
                open2 = true;

            }

        });

    });

</script>

<?php get_footer(); ?>
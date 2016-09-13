<?php get_header(); ?>

	<div class="service-header">
		<h1>Blog</h1>
	</div>

	<div class="container">
		<section id="blog_page">
			<div class="row">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<div class="col-sm-6">
						<a href="<?php the_permalink(); ?>">
							<div class="blog_item">
								<h2><?php the_title(); ?></h2>
								<span class="whiteBar"></span>
								<div class="hidden-xs excerpt"><?php the_excerpt(); ?></div>
								<?php the_post_thumbnail('full'); ?>
								<span class="visible-xs readmore">Read Post</span>
								<span class="hidden-xs readmore">Read more...</span>
							</div>
						</a>
						<!-- <div class="blog_item">
							<div class="blog_item_head">
								<h2><?php the_title(); ?></h2>
								<?php the_post_thumbnail('full'); ?>
							
							</div>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>">Read more...</a>
						</div> -->


					</div>

				<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>

			</div>
		</section>
	</div>

<?php get_footer(); ?>
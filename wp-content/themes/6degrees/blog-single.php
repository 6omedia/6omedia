<?php get_header(); ?>

<div class="service-header">
	<h1><?php the_title(); ?></h1>
</div>

<div class="container">
	<div class="row">
		<section id="single">
			<div class="col-sm-3">
				<?php get_sidebar('blog-sidebar'); ?>
			</div>
			<div class="col-sm-9">
				<div class="main_post">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<?php the_post_thumbnail('full'); ?>
						<?php the_content(); ?>

					<?php endwhile; else : ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>

				</div>
			</div>
		</section>
	</div>
</div>

<?php get_footer(); ?>
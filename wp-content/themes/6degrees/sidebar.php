<?php

	$cat = get_the_category(); 
	$cat = $cat[0]->cat_name; 

?>

<div id="sidebar">

	<div class="mob_side_head">
		<!-- <img id="burger_side" src="<?php bloginfo('template_directory'); ?>/img/burger3.png">
		<h3>Related Posts</h3> -->
		<a href="<?php bloginfo('url');?>/blog">Back to blog</a>
	</div>

	<ul>
		<?php
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('blog-sidebar') ) :
			endif;
		?>

		<!-- pdf stuff -->

		﻿<?php

			$args = array(
				'post_type' => 'pdfs',
				'category_name' => $cat
			);

			$query = new WP_Query( $args );

		?>

		<div class="pdfs">

			<h3>Related Guides</h3>

			<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

				<h4><?php the_title(); ?></h4>
				<a href="<?php the_field( 'pdf_upload' ); ?>">
					<img src="<?php the_field( 'pdf_img' ); ?>">
				</a>

			<?php endwhile; endif; wp_reset_postdata(); ?>

		</div>
		<div class="related_posts" id="related_posts">
			<h3 class="hidden-xs">Related Posts</h3>
			<?php
				query_posts('category_name=' . $cat);
			?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; else : ?>
			<?php endif; ?>
			<?php wp_reset_query(); ?>
		</div>

	</ul>

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

</div>

<script>
                
    jQuery(document).ready(function($){

        var burger = $('#burger_side');
        var mobNav = $('#related_posts');
        var open = false;

        burger.on('click', function(){
            
            if(open){

                // mobNav.css('display', 'none');
                mobNav.hide(200);
                open = false;

            }else{

                // mobNav.css('display', 'inline-block');
                mobNav.show(200);
                open = true;

            }

        });

    });

</script>
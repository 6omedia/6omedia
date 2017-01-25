<?php
/*	
	Template Name: Marketing
 */
?>

<?php get_header(); ?>

	<div class="solution-header">
		<h1><?php the_title(); ?></h1>
		<ul class="list">
			<li><a href="<?php echo get_site_url(); echo '/'; the_field( 'design_link' ); ?>">Website Design</a></li>
			<li class="arrowLi"><a href="#">SEO &amp; Marketing</a></li>
		</ul>
	</div>

	<div class="banner">
		<div class="container">
			<h2>Attract More Prospective Clients to your Website</h2>
			<img src="<?php bloginfo('template_directory'); ?>/img/seo-halesowen.png">
		</div>
	</div>

	<div class="notRedBlock">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h3><?php the_field( 'heading' ); ?></h3>
					<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</div>
				<div class="col-sm-4">
					<div class="process">
						<h4>Our Process</h4>
						<ol>
							<li>Audit &amp; Discovery</li>
							<li>On-Site SEO</li>
							<li>Off-Site SEO</li>
							<li>Content Marketing &amp; Social</li>
							<li>Pay-Per-Click Marketing (PPC)</li>
						</ol>
					</div>
				</div>	
			</div>
		</div>
	</div>

	<div id="red_sticky_bar">
		<ul class="list">
			<li><div>1</div><a href="#" class="hidden-xs">1. Discovery</a><span></span></li>
			<li><div>2</div><a href="#" class="hidden-xs">2. On-Site SEO</a><span></span></li>
			<li><div>3</div><a href="#" class="hidden-xs">3. Off-Site SEO</a><span></span></li>
			<li><div>4</div><a href="#" class="hidden-xs">4. Content</a><span></span></li>
			<li><div>5</div><a href="#" class="hidden-xs">5. Pay-Per-Click</a><span></span></li>
		</ul>
	</div>

	<div class="procesStages">
		<div class="container">
			<div id="stage_1">
				<div class="row">
					<div class="col-sm-6 col-sm-push-6">
						<h2>1. Audit &amp; Discovery</h2>
						<p>
							<?php the_field( 'discovery' ); ?>
						</p>
					</div>
					<div class="col-sm-6 col-sm-pull-6">
						<img src="<?php the_field( 'discovery_image' ); ?>">
					</div>
				</div>
			</div>
			<div id="stage_2">
				<div class="row">
					<div class="col-sm-6">
						<h2>2. On-Site SEO</h2>
						<p>
							<?php the_field( 'on-site-seo' ); ?>
						</p>
					</div>
					<div class="col-sm-6">
						<img src="<?php the_field( 'on-site_seo_image' ); ?>">
					</div>
				</div>
			</div>
			<div id="stage_3">
				<div class="row">
					<div class="col-sm-6 col-sm-push-6">
						<h2>3. Off-Site SEO</h2>
						<p>
							<?php the_field( 'off-site_seo' ); ?>
						</p>
					</div>
					<div class="col-sm-6 col-sm-pull-6">
						<img src="<?php the_field( 'off-site_seo_image' ); ?>">
					</div>
				</div>
			</div>
			<div id="stage_4">
				<div class="row">
					<div class="col-sm-6">
						<h2>4. Content Marketing &amp; Social</h2>
						<p>
							<?php the_field( 'content_marketing' ); ?>
						</p>
					</div>
					<div class="col-sm-6">
						<img src="<?php the_field( 'content_marketing_image' ); ?>">
					</div>
				</div>
			</div>
			<div id="stage_5">
				<div class="row">
					<div class="col-sm-6 col-sm-push-6">
						<h2>5. Pay-Per-Click Marketing (PPC)</h2>
						<p>
							<?php the_field( 'ppc' ); ?>
						</p>
					</div>
					<div class="col-sm-6 col-sm-pull-6">
						<img src="<?php the_field( 'ppc_image' ); ?>">
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		
		jQuery(document).ready(function($){

			const redBar = $('#red_sticky_bar');
			const redLinks = redBar.children().children();
			const barPos = redBar.offset().top;

			const s1_pos = $('#stage_1').offset().top - 105;
			const s2_pos = $('#stage_2').offset().top - 105;
			const s3_pos = $('#stage_3').offset().top - 105;
			const s4_pos = $('#stage_4').offset().top - 105;
			const s5_pos = $('#stage_5').offset().top - 105;

			// console.log(redLinks);

			$(window).scroll(function(){

				if($(this).scrollTop() > barPos){
					redBar.addClass('redBar_scrolled');
				}else{
					redBar.removeClass('redBar_scrolled');
				}

				if($(this).scrollTop() > s1_pos){
					$(redLinks[0]).addClass('stageSelected');
				}else{
					$(redLinks[0]).removeClass('stageSelected');
				}

				if($(this).scrollTop() > s2_pos){
					$(redLinks[1]).addClass('stageSelected');
				}else{
					$(redLinks[1]).removeClass('stageSelected');
				}

				if($(this).scrollTop() > s3_pos){
					$(redLinks[2]).addClass('stageSelected');
				}else{
					$(redLinks[2]).removeClass('stageSelected');
				}

				if($(this).scrollTop() > s4_pos){
					$(redLinks[3]).addClass('stageSelected');
				}else{
					$(redLinks[3]).removeClass('stageSelected');	
				}

				if($(this).scrollTop() > s5_pos){
					$(redLinks[4]).addClass('stageSelected');
				}else{
					$(redLinks[4]).removeClass('stageSelected');	
				}

			});

		});

	</script>

<?php get_footer(); ?>


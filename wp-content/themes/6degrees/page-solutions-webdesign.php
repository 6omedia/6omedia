<?php
/*	
	Template Name: Web Design
 */
?>

<?php get_header(); ?>

	<div class="solution-header">
		<h1><?php the_title(); ?></h1>
		<ul class="list">
			<li class="arrowLi"><a href="#">Website Design</a></li>
			<li><a href="<?php echo get_site_url(); echo '/'; the_field( 'marketing_link' ); ?>">SEO &amp; Marketing</a></li>
		</ul>
	</div>
		
	<div class="banner">
		<div class="container">
			<h2>We Create Websites that Attract &amp; Convert Visitors into Clients</h2>
			<img src="<?php bloginfo('template_directory'); ?>/img/website_img.png">
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
						<h4>The Design Process</h4>
						<ol>
							<li>Discovery Questionnaire</li>
							<li>Pre-design Consultation</li>
							<li>Design Mock-ups</li>
							<li>Website Development</li>
							<li>Quality Assurance &amp; Launch</li>
						</ol>					
					</div>
				</div>	
			</div>
		</div>
	</div>

	<div id="red_sticky_bar">
		<ul class="list">
			<li><div>1</div><a href="#" class="hidden-xs">1. Discovery</a><span></span></li>
			<li><div>2</div><a href="#" class="hidden-xs">2. Consultation</a><span></span></li>
			<li><div>3</div><a href="#" class="hidden-xs">3. Mock-ups</a><span></span></li>
			<li><div>4</div><a href="#" class="hidden-xs">4. Development</a><span></span></li>
			<li><div>5</div><a href="#" class="hidden-xs">5. Launch</a><span></span></li>
		</ul>
	</div>

	<div class="procesStages">
		<div class="container">
			<div id="stage_1">
				<div class="row">
					<div class="col-sm-6 col-sm-push-6">
						<h2>1. Discovery Questionnaire</h2>
						<p>
							<?php the_field( 'discovery_questionnaire' ); ?>
						</p>
					</div>
					<div class="col-sm-6 col-sm-pull-6">
						<img src="<?php the_field( 'discovery_questionnaire_image' ); ?>">
					</div>
				</div>
			</div>

			<div id="stage_2">
				<div class="row">
					<div class="col-sm-6">
						<h2>2. Pre-design Consultation</h2>
						<p>
							<?php the_field( 'pre-design_consultation' ); ?>
						</p>
					</div>
					<div class="col-sm-6">
						<img src="<?php the_field( 'pre-design_image' ); ?>">
					</div>
				</div>
			</div>

			<div id="stage_3">
				<div class="row">
					<div class="col-sm-6 col-sm-push-6">
						<h2>3. Design Mock-ups</h2>
						<p>
							<?php the_field( 'design_mock-ups' ); ?>
						</p>
					</div>
					<div class="col-sm-6 col-sm-pull-6">
						<img src="<?php the_field( 'design_mock-ups_image' ); ?>">
					</div>
				</div>
			</div>

			<div id="stage_4">
				<div class="row">
					<div class="col-sm-6">
						<h2>4. Website Development</h2>
						<p>
							<?php the_field( 'website_development' ); ?>
						</p>
					</div>
					<div class="col-sm-6">
						<img src="<?php the_field( 'development_image' ); ?>">
					</div>
				</div>
			</div>

			<div id="stage_5">
				<div class="row">
					<div class="col-sm-6 col-sm-push-6">
						<h2>5. Quality Assurance &amp; Launch…&amp; Quality Assurance again</h2>
						<p>
							<?php the_field( 'quality_assurance' ); ?>
						</p>
					</div>
					<div class="col-sm-6 col-sm-pull-6">
						<img src="<?php the_field( 'quality_assurance_image' ); ?>">
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
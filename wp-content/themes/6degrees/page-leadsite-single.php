<?php
/*	
	Template Name: Single Lead Site
 */
?>

<?php get_header('justhead'); ?>

	<?php include('red_sidebar.php'); ?>

	<div class="theBlocks">
		<div class="visible-xs">
			<a class="backTo" href="<?php echo home_url(); ?>">< Back to 6&deg; home</a>			
		</div>

		<div class="solutionsHeader">
			<h1><span>Lead</span> Sites</h1>
			<ul class="list">

				<!--

					Get links below from custom post type 

				-->

				<li><a href="<?php the_field('features_link'); ?>">Features</a></li>
				<li><a href="<?php the_field('web_design_link'); ?>">Web Design</a></li>
				<li><a href="<?php the_field('marketing_link'); ?>">SEO &amp; Marketing</a></li>
				<li><a class="btn-demo" href="<?php echo home_url() . '/demo'; ?>">DEMO</a></li>
			</ul>
		</div>
		<div class="solutionsBody">

			<!-- Video -->
			<iframe src="https://www.youtube.com/embed/lbMv0UkAswI" frameborder="0" allowfullscreen></iframe>

			<!-- Buttons -->
			<div class="buttons">
				<div><p>Get your website designed</p><a href="<?php the_field('web_design_link'); ?>">WEB DESIGN</a></div>
				<div><p>Already have an awesome site layout</p><a href="<?php the_field('marketing_link'); ?>">SEO &amp; MARKETING</a></div>
			</div>

		</div>
	</div>

<?php get_footer('nofoot'); ?>
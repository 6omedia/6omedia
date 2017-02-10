<?php
/*	
	Template Name: Lead Sites
 */
?>

<?php get_header(); ?>

	<?php include('red_sidebar.php'); ?>
	
	<div class="theBlocks">
		<div class="solutionsHeader">
			<h1><span>Lead</span> Sites</h1>
		</div>
		<div class="solutionsBody">
			<h2>Select Your Industry</h2>

			<ul class="list industries">
				<li id="ind_law">
					<a href="http://localhost/wp-6degrees/law-lead-sites/">LAW</a>
				</li>
				<li id="ind_more">
					<a href="">MORE COMING SOON</a>
					</a>
				</li>
			</ul>

			<!-- <ul class="list industries">
				<li>
					<a href="">
						<img src="<?php // bloginfo('template_directory'); ?>/img/law.png">
						<h3>LAW</h3>
					</a>
				</li>
				<li>
					<img src="<?php // bloginfo('template_directory'); ?>/img/no_ind.png">
					<h3>MORE COMING SOON</h3>
				</li>
			</ul> -->
		</div>
	</div>

<?php get_footer(); ?>
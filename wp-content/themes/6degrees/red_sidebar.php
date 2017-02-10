<div class="redSide hidden-xs">
	<img class="logo" src="<?php bloginfo('template_directory'); ?>/img/6dmedia_logo_circle.png" alt="6degrees Media Logo">
	<ul class="list social">
		<li>
			<a href="https://www.facebook.com/6omedia">
				<img src="<?php bloginfo('template_directory'); ?>/img/facebook.png">
			</a>
		</li>
		<li>
			<a href="https://twitter.com/6omedia">
				<img src="<?php bloginfo('template_directory'); ?>/img/twitter.png">
			</a>
		</li>
		<li>
			<a href="https://www.instagram.com/6omedia">
				<img src="<?php bloginfo('template_directory'); ?>/img/instagram.png">
			</a>
		</li>
		<li>
			<a href="https://uk.pinterest.com/6omedia">
				<img src="<?php bloginfo('template_directory'); ?>/img/Pinterest.png">
			</a>
		</li>
		<li>
			<a href="">
				<img src="<?php bloginfo('template_directory'); ?>/img/youtube.png">
			</a>
		</li>
		<li>
			<a href="">
				<img src="<?php bloginfo('template_directory'); ?>/img/Medium.png">
			</a>
		</li>
	</ul>

	<?php 

		if(is_front_page()){ 
	            
	    	$defaults = array(
	        	'container' => false,
	        	'theme_location' => 'side_nav',
	        	'menu_id' => 'side_nav',
	        	'menu_class' => 'list sideNav'
	    	);
	    
	    	wp_nav_menu( $defaults );

		}else{ ?>

			<a class="backTo" href="<?php echo home_url(); ?>">< Back to 6&deg; home</a>

			<h2>Soultions for:</h2>

		<?php	

			$defaults = array(
	        	'container' => false,
	        	'theme_location' => 'solutions_nav',
	        	'menu_id' => 'solutions_nav',
	        	'menu_class' => 'list sideNav'
	    	);
	    
	    	wp_nav_menu( $defaults );

		}

	?>

	<div id="lets-talk">
		<h2>LET'S TALK</h2>
		<p>
			Our teams of account managers, project managers, designers and developers are on hand to talk.
		</p>
		<p>		
			Simply provide your contact details and we'll get straight back to you.
		</p>
		<div class="form">
			<input type="text" id="name" placeholder="YOUR NAME">
			<input type="text" id="email" placeholder="YOUR EMAIL ADDRESS">
			<input type="text" id="contact" placeholder="YOUR CONTACT NUMBER">
			<button id="submit">START THE CONVERSATION</button>
			<p id="errorMsg"></p>
			<img src="<?php bloginfo('template_directory'); ?>/img/spin.gif" id="spin">
		</div>				
	</div>
</div>
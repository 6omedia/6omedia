
<?php get_header(); ?>

	<!-- <div class="fullscreen-bg">
	    <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
	        <source src="<?php // bloginfo('template_directory'); ?>/videos/home.mp4" type="video/mp4">
	    </video>
	</div> -->

	<div class="mob_bar visible-xs">
		<img class="logo" src="<?php bloginfo('template_directory'); ?>/img/6dmedia_logo_circle.png" alt="6degrees Media Logo">
		<img id="burger" src="<?php bloginfo('template_directory'); ?>/img/burger.png" class="visible-xs">
	</div>

	<ul id="mobNav" class="list">
		<li><a href="#services">SERVICES</a></li>
		<li><a href="#our-work">OUR WORK</a></li>
		<li><a href="#our-team">TEAM</a></li>
		<li><a href="#contact">GET IN TOUCH</a></li>
	</ul>

	<div id="heroVideo">
		<video playsinline autoplay muted loop poster="polina.jpg" id="bgvid">
		    <!-- <source src="polina.webm" type="video/webm"> -->
		    <source src="<?php bloginfo('template_directory'); ?>/videos/home.mp4" type="video/mp4">
		</video>

		<div id="centerBlock">
			<img id="logo" class="hidden-xs" src="<?php bloginfo('template_directory'); ?>/img/6dmedia_logo_circle.png" alt="6degrees Media Logo">
			<p class="hi">Hello!</p>
			<span>we're a UK digital &amp; creative agency based in London</span>
			<h1 id="services">what shall we help you with?</h1>
		</div>

		<a href="#home_page">
			<img class="hidden-xs" id="more_arrow" src="<?php bloginfo('template_directory'); ?>/img/more_arrow.png" alt="6degrees Media Logo">
		</a>
	</div>

	<div id="home_page">

		<?php include('red_sidebar.php'); ?>
		
		<div class="theBlocks">
			<h1>Services</h1>
			<a href="<?php echo home_url(); ?>/law-firms">
				<div class="block" id="block_wd">
					<h2>Web Design</h2>
				</div>
			</a>
			<a href="<?php echo home_url(); ?>/law-marketing#stage_2">
				<div class="block" id="block_onseo">
					<h2>On-Site SEO</h2>
				</div>
			</a>
			<a href="<?php echo home_url(); ?>/law-marketing#stage_3">
				<div class="block" id="block_offseo">
					<h2>Off-Site SEO</h2>
				</div>
			</a>
			<a href="<?php echo home_url(); ?>/law-marketing#stage_4">
				<div class="block" id="block_cm">
					<h2>Content Marketing</h2>
				</div>
			</a>
			<a href="<?php echo home_url(); ?>/law-marketing#stage_4">
				<div class="block" id="block_social">
					<h2>Social Media</h2>
				</div>
			</a>
			<a href="<?php echo home_url(); ?>/law-marketing#stage_5">
				<div class="block" id="block_paid">
					<h2>Paid Media</h2>
				</div>
			</a>
			<h1>Work</h1>
			<a href="<?php echo home_url(); ?>/work#workitem_0">
				<div class="block">
					<img class="bg" src="<?php bloginfo('template_directory'); ?>/img/makeup.jpg" alt="">
					<div class="logo1 workLogo"></div>
				</div>
			</a>
			<a href="<?php echo home_url(); ?>/work#workitem_1">
				<div class="block">
					<img class="bg" src="<?php bloginfo('template_directory'); ?>/img/kiteboarding.png" alt="">
					<div class="logo2 workLogo"></div>
				</div>
			</a>
			<a href="<?php echo home_url(); ?>/work#workitem_3">
				<div class="block">
					<img class="bg" src="<?php bloginfo('template_directory'); ?>/img/tristar_bg.jpg" alt="">
					<div class="logo3 workLogo"></div>
				</div>
			</a>
			<a href="">
				<div class="block">
					<img class="bg" src="<?php bloginfo('template_directory'); ?>/img/limo_bg.jpg" alt="">
					<div class="logo5 workLogo"></div>
				</div>
			</a>
			<a href="<?php echo home_url(); ?>/work#workitem_4">
				<div class="block">
					<img class="bg" src="<?php bloginfo('template_directory'); ?>/img/acu.jpg" alt="">
					<div class="logo4 workLogo"></div>
				</div>
			</a>
			<a href="">
				<div class="block">
					<img class="bg" src="<?php bloginfo('template_directory'); ?>/img/makeup.jpg" alt="">
					<div class="logo6 workLogo"></div>
				</div>
			</a>
		</div>
	</div>


























<!-- 	<div id="hero">
		<div class="container-fluid">
			
			<div id="home_nav">
				<ul class="list">
						<li class="hidden-xs"><a href="#services">SERVICES</a></li>
						<li class="hidden-xs"><a href="#our-work">OUR WORK</a></li>
						<li><span>6°</span></li>
						<li class="hidden-xs"><a href="#our-team">TEAM</a></li>
						<li class="hidden-xs"><a href="#contact">GET IN TOUCH</a></li>
				</ul>
			</div>

			<img id="burger" src="<?php // bloginfo('template_directory'); ?>/img/burger.png" class="visible-xs">

			<ul id="mobNav" class="list">
				<li><a href="#services">SERVICES</a></li>
				<li><a href="#our-work">OUR WORK</a></li>
				<li><a href="#our-team">TEAM</a></li>
				<li><a href="#contact">GET IN TOUCH</a></li>
			</ul>

		</div>
		<div class="container">
			<p class="hi">Hello!</p>
			<span class="we_are">we're a UK digital &amp; creative agency based in London</span>
			<h1 id="services">what shall we help you with?</h1>
			<p class="ineed">I NEED TO</p>

			<?php
								
				// $defaults = array(
				// 	'container' => false,
				// 	'theme_location' => 'main_nav',
				// 	'menu_id' => 'main_nav',
				// 	'menu_class' => 'list'
				// );
				
				// wp_nav_menu( $defaults );
		
			?>
		</div>
	</div> -->

		<!-- <div class="container-fluid services">
				
				<div id="our-work" class="row">
						<h2>PEOPLE WHO LOVE OUR WORK</h2>
						<ul class="list" id="logos">
							<li><a href=""><img src="<?php // bloginfo('template_directory'); ?>/img/logo1.png" class="img-responsive"></a></li>
							<li><a href=""><img src="<?php // bloginfo('template_directory'); ?>/img/logo2.png" class="img-responsive"></a></li>
							<li><a href=""><img src="<?php // bloginfo('template_directory'); ?>/img/logo3.png" class="img-responsive"></a></li>
							<li><a href=""><img src="<?php // bloginfo('template_directory'); ?>/img/logo4.png" class="img-responsive"></a></li>
							<li><a href=""><img src="<?php // bloginfo('template_directory'); ?>/img/logo5.png" class="img-responsive"></a></li>
							<li><a href=""><img src="<?php // bloginfo('template_directory'); ?>/img/logo6.png" class="img-responsive"></a></li>
						</ul>
						<img src="<?php // bloginfo('template_directory'); ?>/img/portfolio.png" class="img-responsive">
						<p class="back-to-top-red"><a href="#top">BACK TO TOP</a></p>
				</div>
		</div> -->

		<!-- <div id="our-team" class="alt-bg">
				<h2>MEET THE TEAM</h2>
				
				<div class="col-sm-6 col-md-6 col-xs-12">
					<div class="row">
							<div class="col-sm-9 technology">
									<span class="team-type">Technology</span>&nbsp;&nbsp;<i class="fa fa-code fa-2x"></i>
									<p>Our left-brain thinkers love to handcraft code &amp; develop clever engineering for powerful ROI driving websites.</p>
							</div>
							<div class="hidden-xs col-sm-3">
									<img src="<?php // bloginfo('template_directory'); ?>/img/brain_left-md.png" class="img-responsive pull-right">
							</div>
					</div>
					<div class="teamImgs">
							<div class="row">
									<div class="col-sm-3 col-xs-6">
										<img src="<?php // bloginfo('template_directory'); ?>/img/team-sigley.png" class="img-responsive img-circle"/>
									</div>
									<div class="col-sm-3 col-xs-6">
										<img src="<?php // bloginfo('template_directory'); ?>/img/team-chris.png" class="img-responsive img-circle"/>
									</div>
									<div class="col-sm-3 col-xs-6">
										<img src="<?php // bloginfo('template_directory'); ?>/img/team-tom.png" class="img-responsive img-circle"/>
									</div>
									<div class="col-sm-3 col-xs-6">
										<img src="<?php // bloginfo('template_directory'); ?>/img/team-jason.png" class="img-responsive img-circle"/>
									</div>
							</div>
						</div>
				</div>
				<div class="col-sm-6 col-md-6 col-xs-12">
					<div class="row">
							<div class="hidden-xs col-sm-3">
									<img src="<?php // bloginfo('template_directory'); ?>/img/brain_right-md.png" class="img-responsive pull-left">
							</div>
							<div class="col-md-9 creative">
									<i class="fa fa-lightbulb-o fa-2x"></i>&nbsp;&nbsp;<span class="team-type">Creativity</span>
								<p>Our right brain-thinkers will bring your brand to life with engaging media pieces &amp; thoughtful graphic design.</p>
							</div>
						</div>
					<div class="teamImgs">
						<div class="row">
								<div class="col-sm-3 col-xs-6">
										<img src="<?php // bloginfo('template_directory'); ?>/img/team-maz.png" class="img-responsive img-circle"/>
								</div>
								<div class="col-sm-3 col-xs-6">
										<img src="<?php // bloginfo('template_directory'); ?>/img/team-henry.png" class="img-responsive img-circle"/>
								</div>
								<div class="col-sm-3 col-xs-6">
										<img src="<?php // bloginfo('template_directory'); ?>/img/team-gary.png" class="img-responsive img-circle"/>
								</div>
								<div class="col-sm-3 col-xs-6">
										<img src="<?php // bloginfo('template_directory'); ?>/img/team-success.png" class="img-responsive img-circle"/>
								</div>
							</div>
					</div>
			</div>
				<p class="back-to-top-grey"><a href="#top">BACK TO TOP</a></p>
		</div>    -->

		<!-- <div id="lets-talk">
			<div class="container">
				<h2>LET'S TALK</h2>
				<p>
					Our teams of account managers, project managers, designers and developers are on hand to talk.
			</p>
			<p>		
				Simply provide your contact details and we'll get straight back to you.
				</p>
				<div class="form">
					<p id="errorMsg"></p>
					<input type="text" id="name" placeholder="YOUR NAME">
					<input type="text" id="email" placeholder="YOUR EMAIL ADDRESS">
					<input type="text" id="contact" placeholder="YOUR CONTACT NUMBER">
					<button id="submit">START THE CONVERSATION</button>
				</div>
				<p class="back-to-top-red"><a href="#top">BACK TO TOP</a></p>
			</div>
		</div> -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script>

			$(function() {
					$('a[href*="#"]:not([href="#"])').click(function() {
							if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
									var target = $(this.hash);
									target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
									if (target.length) {
											$('html, body').animate({
													scrollTop: target.offset().top
											}, 1000);
											return false;
									}
							}
					});
			});

			jQuery(document).ready(function($){

				var burger = $('#burger');
				var mobNav = $('#mobNav');
				var open = false;
				var spin = $('#spin');

				burger.on('click', function(){
					
					if(open){

						mobNav.css('display', 'none');
						open = false;

					}else{

						mobNav.css('display', 'inline-block');
						open = true;

					}

				});

				// contact form bit

				var submit = $('#submit');

				submit.on('click', function(){

					validateForm();

				});

				function sendEmail(name, email, contact){

					$(errorMsg).html('');
					spin.css('display', 'inline-block');
					submit.css('display', 'none');

					$.ajax({
						// live
						// url: '../wp-6degrees/themes/6degrees/send_contact_form.php',
						url: '../wp-6degrees/wp-content/themes/6degrees/send_contact_form.php',
						type: 'POST',
						//dataType: 'json',
						data:
						{
							name: name,
							email: email,
							contact: contact 
						},
						success: function(data)
						{
							console.log(data);
							var response;

							if(data.success === '1'){
								response = 'Thank you, your message was sent successfully';
							}else{
								response = 'There was a problem, please try again';
							}

							$('#errorMsg').html(response);
							spin.css('display', 'none');
							submit.css('display', 'inline-block');

						},
						error: function(xhr, desc, err)
						{
						  	console.log('nope ', desc, err);   
						}
					});

				}

				function validateForm(){

					var name = $('#name').val();
					var email = $('#email').val();
					var contact = $('#contact').val();

					var isValid = true;
					var error  = 'Please fill out missing fields';

					if(contact === ''){
						isValid = false;
						error = 'Contact required';
						$('#contact').focus();
						$('#contact').addClass('invalid');
					}else{
						$('#contact').removeClass('invalid');
					}

					if(email === '' || email.indexOf('@') == -1){
						isValid = false;
						error = 'Valid email required';
						$('#email').focus();
						$('#email').addClass('invalid');
					}else{
						$('#email').removeClass('invalid');
					}

					if(name === ''){
						isValid = false;
						error = 'Name required';
						$('#name').focus();
						$('#name').addClass('invalid');
					}else{
						$('#name').removeClass('invalid');
					}

					if(isValid){
						sendEmail(name, email, contact);
					}else{
						$('#errorMsg').html(error);
					}
					
				}

			});

		</script>

<?php get_footer(); ?>
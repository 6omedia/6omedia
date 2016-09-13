
<?php get_header(); ?>

	<div id="hero">
				<!-- NAVIGATION -->
				<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div id="home_nav">
								<ul class="list">
										<li class="hidden-xs"><a href="#services">SERVICES</a></li>
										<li class="hidden-xs"><a href="#our-work">OUR WORK</a></li>
										<li><span>6°</span></li>
										<li class="hidden-xs"><a href="#our-team">TEAM</a></li>
										<li class="hidden-xs"><a href="#contact">GET IN TOUCH</a></li>
								</ul>
						</div>

						<img id="burger" src="<?php bloginfo('template_directory'); ?>/img/burger.png" class="visible-xs">

						<ul id="mobNav" class="list">
								<li><a href="#services">SERVICES</a></li>
								<li><a href="#our-work">OUR WORK</a></li>
								<li><a href="#our-team">TEAM</a></li>
								<li><a href="#contact">GET IN TOUCH</a></li>
						</ul>
				</div><!-- end navigation -->

				<div class="container">
					<p class="hi">Hello!</p>
					<span class="we_are">we're a UK digital &amp; creative agency based in London</span>
					<h1 id="services">what shall we help you with?</h1>
					<p class="ineed">I NEED TO</p>

					<?php
										
							$defaults = array(
									'container' => false,
									'theme_location' => 'main_nav',
									'menu_id' => 'main_nav',
									'menu_class' => 'list'
							);
							
							wp_nav_menu( $defaults );
					
					?>

					<!-- <ul id="main_nav" class="list">
						<li class="hvr-shutter-out-horizontal"><a href="">BUILD MY BRAND</a></li>
						<li class="hvr-shutter-out-horizontal"><a href="">LAUNCH A WEBSITE</a></li>
						<li class="hvr-shutter-out-horizontal"><a href="">INCREASE CUSTOMERS</a></li>
						<li class="hvr-shutter-out-horizontal"><a href="">MAKE MORE SALES</a></li>
					</ul> -->
				</div>
		</div>

		<div class="container-fluid services">
				<!-- OUR WORK -->
				<div id="our-work" class="row">
						<h2>PEOPLE WHO LOVE OUR WORK</h2>
						<img src="<?php bloginfo('template_directory'); ?>/img/portfolio.png" class="img-responsive">
						<p class="back-to-top-red"><a href="#top">BACK TO TOP</a></p>
				</div>
		</div>

		<div id="our-team" class="alt-bg">
				<h2>MEET THE TEAM</h2>
				
				<div class="col-sm-6 col-md-6 col-xs-12">
					<div class="row">
							<div class="col-sm-9 technology">
									<span class="team-type">Technology</span>&nbsp;&nbsp;<i class="fa fa-code fa-2x"></i>
									<p>Our left-brain thinkers love to handcraft code &amp; develop clever engineering for powerful ROI driving websites.</p>
							</div>
							<div class="hidden-xs col-sm-3">
									<img src="<?php bloginfo('template_directory'); ?>/img/brain_left-md.png" class="img-responsive pull-right">
							</div>
					</div>
					<div class="teamImgs">
							<div class="row">
									<div class="col-sm-3 col-xs-6">
										<img src="<?php bloginfo('template_directory'); ?>/img/team-sigley.png" class="img-responsive img-circle"/>
									</div>
									<div class="col-sm-3 col-xs-6">
										<img src="<?php bloginfo('template_directory'); ?>/img/team-chris.png" class="img-responsive img-circle"/>
									</div>
									<div class="col-sm-3 col-xs-6">
										<img src="<?php bloginfo('template_directory'); ?>/img/team-tom.png" class="img-responsive img-circle"/>
									</div>
									<div class="col-sm-3 col-xs-6">
										<img src="<?php bloginfo('template_directory'); ?>/img/team-jason.png" class="img-responsive img-circle"/>
									</div>
							</div>
						</div>
				</div>
				<div class="col-sm-6 col-md-6 col-xs-12">
					<div class="row">
							<div class="hidden-xs col-sm-3">
									<img src="<?php bloginfo('template_directory'); ?>/img/brain_right-md.png" class="img-responsive pull-left">
							</div>
							<div class="col-md-9 creative">
									<i class="fa fa-lightbulb-o fa-2x"></i>&nbsp;&nbsp;<span class="team-type">Creativity</span>
								<p>Our right brain-thinkers will bring your brand to life with engaging media pieces &amp; thoughtful graphic design.</p>
							</div>
						</div>
					<div class="teamImgs">
						<div class="row">
								<div class="col-sm-3 col-xs-6">
										<img src="<?php bloginfo('template_directory'); ?>/img/team-maz.png" class="img-responsive img-circle"/>
								</div>
								<div class="col-sm-3 col-xs-6">
										<img src="<?php bloginfo('template_directory'); ?>/img/team-henry.png" class="img-responsive img-circle"/>
								</div>
								<div class="col-sm-3 col-xs-6">
										<img src="<?php bloginfo('template_directory'); ?>/img/team-gary.png" class="img-responsive img-circle"/>
								</div>
								<div class="col-sm-3 col-xs-6">
										<img src="<?php bloginfo('template_directory'); ?>/img/team-success.png" class="img-responsive img-circle"/>
								</div>
							</div>
					</div>
			</div>
				<p class="back-to-top-grey"><a href="#top">BACK TO TOP</a></p>
		</div>   

		<div id="lets-talk">
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
		</div>

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

					errorMsg.html('');
					spin.css('display', 'inline-block');
					sendBtn.css('display', 'none');

					$.ajax({
						url: '../wp-content/themes/6degrees/send_contact_form.php',
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
							sendBtn.css('display', 'inline-block');

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
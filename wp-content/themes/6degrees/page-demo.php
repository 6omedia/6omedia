<?php
/*	
	Template Name: demo
 */
?>

<?php get_header(); ?>

	<div class="service-header">
		<h1><?php the_title(); ?></h1>
	</div>

	<div class="container">
		<div class="demoText">
			<p>
				Tilde cornhole gochujang, yr banjo venmo swag tattooed. Polaroid vape organic hexagon humblebrag, small batch hammock umami portland vice typewriter poutine seitan.
			</p>
		</div>

		<div class="row">
			<div class="col-sm-6">
				<div class="demo_form">

					<ul class="list">
						<li>
							<label for="name">Name</label>
							<input id="name" type="text">
						</li>
						<li>
							<label for="email">Email</label>
							<input id="email" type="text">
						</li>
						<li>
							<label for="website">Website</label>
							<input id="website" type="text">
						</li>
						<li>
							<button id="submit_btn">Submit</button>
							<img src="<?php bloginfo('template_directory'); ?>/img/spin.gif" id="spin">
							<p id="errorMsg"></p>
						</li>
					</ul>

				</div>
			</div>
			<div class="col-sm-6">
				<div class="demoImgCont">
					<img class="demoImg" src="<?php bloginfo('template_directory'); ?>/img/website_img.png">
				</div>
			</div>	
		</div>
	</div>

	<script>
		
		jQuery(document).ready(function($){

			var submit = $('#submit_btn');
			var spin = $('#spin');

			submit.on('click', function(){
				validateForm();
			});

			function sendEmail(name, email, website){

				$(errorMsg).html('');
				spin.css('display', 'inline-block');
				submit.css('display', 'none');

				$.ajax({
					// live
					// url: '../wp-6degrees/themes/6degrees/send_contact_form.php',
					url: '../wp-6degrees/wp-content/themes/6degrees/demo_request_form.php',
					type: 'POST',
					//dataType: 'json',
					data:
					{
						name: name,
						email: email,
						website: website 
					},
					success: function(data)
					{
						console.log(data);
						var response;

						if(data.success === '1'){
							response = 'Thank you, someone will be in contact shortly';
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
				var website = $('#website').val();

				var isValid = true;
				var error  = 'Please fill out missing fields';

				// if(website === ''){
				// 	isValid = false;
				// 	error = 'Contact required';
				// 	$('#website').focus();
				// 	$('#website').addClass('invalid');
				// }else{
				// 	$('#website').removeClass('invalid');
				// }

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
					sendEmail(name, email, website);
				}else{
					$('#errorMsg').html(error);
				}
				
			}

		});

	</script>

<?php get_footer(); ?>
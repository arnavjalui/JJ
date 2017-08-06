<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width" />
		<title>HJ</title>     

		<!-- FONT AWESOME ICONS LINK -->
        <link href="css/font-awesome.css" rel="stylesheet"> 
        

		<!-- CSS LINK -->
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
		<link rel="stylesheet" type="text/css" href="CSS/contact-us.css">

		<!-- CUSTOM STYLE -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

        <!-- GOOGLE FONTS IMPORT -->
        <link href="https://fonts.googleapis.com/css?family=Forum" rel="stylesheet">

        <style type="text/css">
        </style>
	</head>
	
	<!-- PHP INCLUDE STATEMENT FOR HEADER -->
	<?php include('header.php') ?>

	<div class="hero-image">
		<div class="bg">
			<div class="hero-text">
				<h1>Get in touch</h1>
				<hr>
				<p>Have a little something, something you want to talk to us about? Give us a ring, send us an email, or fill out the form below.</p>
			</div>
		</div>
	</div>
	<div id="block-2">
		<div class="l-6">
			<div class="text-block1">
				<h1>Haresh Jasani.</h1>
				<hr>
				<p><i class="fa fa-map-marker"></i> Address</p>
				<p><i class="fa fa-map-marker"></i> Address</p>
				<a class="link-line link-invert" href="mailto:jahanvijasani.46@gmail.com"><i class="fa fa-envelope"></i>   jahanvijasani.46gmail.com</a>
				<p><i class="fa fa-phone"></i> 9769983936 | <i class="fa fa-phone"></i> 9769983936</p>
			</div>
		</div>
		<div class="l-6">
			<div class="text-block2">
				<h3>Hit Us Up</h3>
				<hr style="margin: 0;">
				<form action="sendmail.php" method="POST">
					<p>Name<span style="color: red;">*</span></p>
					<input class="texrbox" type="text" name="customer_name" required>
					<br><br>
					<p>Organization<span>*</span></p>
					<input class="texrbox" type="text" name="customer_organization" required>
					<p>E-mail<span>*</span></p>
					<input class="texrbox" type="email" name="customer_email" required>
					<p>Mobile<span>*</span></p>
					<input class="texrbox" type="text" name="customer_mobile" required>
					<p>Message<span>*</span></p>
					<textarea class="texrbox" name="customer_message" required></textarea><br>
					<button class="contact_button" name="submit_contact_me">Contact Us</button>
					<span style="margin-left: 20px; color: #000;"><span>* </span>indicates required fields</span>
				</form>
			</div>
		</div>
	</div>
	<div id="block-3" class="l-12">
		<h2>Workshop Location</h2>
		<div id="map-block">  	  
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15082.402679591443!2d72.89876327023337!3d19.081287193356143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c631dcb145d9%3A0xed2e7c2011a11141!2sGhatkopar+East%2C+Mumbai%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1499403901430" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>

	<!-- PHP INCLUDE STATEMENT FOR FOOTER -->
    <?php include('footer.php') ?>
	

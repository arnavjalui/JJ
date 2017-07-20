<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width" />
		<title>HJ</title>     

		<!-- CSS LINK -->
		<link rel="stylesheet" type="text/css" href="CSS/main_css2.css">

		<!-- MFG ICONS LINK -->
		<link rel="stylesheet" type="text/css" href="CSS/mfglabs_iconset.css">

		<!-- GOOGLE FONTS IMPORT -->
        <link href="https://fonts.googleapis.com/css?family=Advent+Pro" rel="stylesheet">    <!-- Font Option 1 -> Advent Pro-->
        <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">    <!-- Font Option 2 -> Dosis , if option 1 does not look good-->
        <link href="https://fonts.googleapis.com/css?family=Forum" rel="stylesheet">

        <style type="text/css">
        	.hero-image {
        		position: relative;
        		padding-top: 50px;
        		background-image: url('http://elresalah.com/images/files/requests/requests.jpg');
        		height: 35em;
        		background-position: center;
        		background-repeat: no-repeat;
        		background-size: cover;
        		z-index: 1;
        	}
        	.bg {
        		position: relative;
        		height: 35em;
        		background: rgba(0,0,0,0.8);
			  	z-index: 10;
        	}
        	.hero-text {
			  text-align: center;
			  position: absolute;
			  top: 55%;
			  left: 45%;
			  transform: translate(-45%, -55%);
			  color: white;
			}
			.hero-text h1 {
				box-sizing: border-box;
				-webkit-margin-after: 0;
				-moz-margin-after: 0;
				-o-margin-after: 0;
				-webkit-margin-before: 0;
				-moz-margin-before: 0;
				-o-margin-before: 0;
				font-size: 5em;
				font-weight: 100;
				text-transform: uppercase;
			}
			.hero-text hr {
				box-sizing: content-box;
				display: block;
				width: 15%;
				margin: 1em auto;
				border: 1px solid #92c500;
			}
			.hero-text p {
				box-sizing: border-box;
				padding-left: 5em;
				padding-right: 5em;
				font-size: 1.5em;
				line-height: 1.5em;
			}
			#block-2 {
				height: 41em;
				background-color: #eaeaeb;
			}
			.text-block1 {
				background-image: url('https://s-media-cache-ak0.pinimg.com/originals/2e/d7/13/2ed713deb2051102506ea4e0f186eb3b.jpg');
				padding: 7em 7em 7em 7em;
				z-index: 98;
			}
			.text-block1 h1 {
				margin: 1em 0.2em;
				-webkit-margin-after: 0;
				-moz-margin-after: 0;
				-o-margin-after: 0;
				font-size: 3.5em;
				color: #fff;
			}
			.text-block1 hr {
				box-sizing: content-box;
				display: block;
				width: 40%;
				margin: 1em 0.5em;
				border: 1px solid #92c500;
			}
			.text-block1 p {
				margin: 1em 0.2em;
				font-size: 1.8em;
				color: #fff;
			}
			.text-block1 a {
				margin: 1em 0.2em;
				color: #92c500;
				font-size: 2em;
				text-decoration: none;
				transition: color 0.6s;
			}
			.text-block1 a:hover {
				color: #b9f70c;
			}
			.text-block1 span {
				color: #92c500;
				font-size: 1.3em;
			}
			.text-block2 {
				padding: 2em 2em 2em 2em;
			}
			.text-block2 h3 {
				text-align: center;
				font-size: 2em;
			}
			#block-3 {
				background-color: #92c500;
			}
			#block-3 h2 {
				font-size: 2.5em;
				font-weight: 200;
				color: #fff;
				text-align: center;
			}
			#map-block iframe{
			    pointer-events: none;
			}
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
				<p><i class="icon-placepin"> </i>Address</p>
				<p><i class="icon-placepin"> </i>Address</p>
				<a class="link-line link-invert" href="mailto:jahanvijasani.46@gmail.com"><i class="icon-mail"></i>   jahanvijasani.46gmail.com</a>
				<p><span>M</span> 9769983936 | <span>M</span> 9769983936</p>
			</div>
		</div>
		<div class="l-6">
			<div class="text-block2">
				<h3>Hit Us Up</h3>
				<hr>

			</div>
		</div>
	</div>
	<div id="block-3" class="l-12">
		<h2>Workshop Location</h2>
		<div id="map-block">  	  
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15082.402679591443!2d72.89876327023337!3d19.081287193356143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c631dcb145d9%3A0xed2e7c2011a11141!2sGhatkopar+East%2C+Mumbai%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1499403901430" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
	</body>
</html>
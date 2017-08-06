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
		<link rel="stylesheet" href="CSS/carousel.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<!-- CUSTOM STYLE -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

        <!-- GOOGLE FONTS IMPORT -->
        <link href="https://fonts.googleapis.com/css?family=Forum" rel="stylesheet">


		<style>
		</style>
	</head>
    
    <!-- PHP INCLUDE STATEMENT FOR HEADER -->
	<?php include('header.php') ?>

	<!--CAROUSEL-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="https://www.hurtigruten.com/globalassets/photos/voyages/explorer/2018-19/europe/navigating-the-bays/antwerp_shutterstock_304289603.jpg?width=1600&height=800&transform=DownFill" alt="Los Angeles" style="width:100%;">
                <div class="carousel-caption">
                    <h2>Responsive Home Page</h2>
                    <p>A random act of kindness, no matter how small, can make a tremendous impact on someone else's life.</p>
                </div>
            </div>

            <div class="item">
                <img src="https://www.hurtigruten.com/globalassets/photos/voyages/explorer/2018-19/europe/navigating-the-bays/antwerp_shutterstock_304289603.jpg?width=1600&height=800&transform=DownFill" alt="Chicago" style="width:100%;">
                <div class="carousel-caption">
                    <h2>Responsive Home Page</h2>
                    <p>A random act of kindness, no matter how small, can make a tremendous impact on someone else's life.</p>
                </div>
            </div>

            <div class="item">
                <img src="https://www.hurtigruten.com/globalassets/photos/voyages/explorer/2018-19/europe/navigating-the-bays/antwerp_shutterstock_304289603.jpg?width=1600&height=800&transform=DownFill" alt="New York" style="width:100%;">
                <div class="carousel-caption">
                    <h2>Responsive Home Page</h2>
                    <p>A random act of kindness, no matter how small, can make a tremendous impact on someone else's life.</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon icon-chevron-left"><i class="icon-chevron_left"></i></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon icon-chevron-right"><i class="icon-chevron_right"></i></span>
        </a>
    </div>
    <!--CAROUSEL END--> 
        
    <!--FIRST_BLOCK-->
    <div id="first-block">
        <div class="line">
            <h1>20 YEARS</h1>
            <h2>OF EXPERIENCE IN THE INDUSTRY</h2>
            <script src="js/typewriter.js"></script>
            <p class="typewrite" data-period="2000" data-type='[ "A random act of kindness, no matter how small, can make a tremendous impact on someone else&#39;s life" ]'>
            <div class="center"><a class="white-btn" href="#">See All Projects</a></div>
        </div>
    </div>
    <!--FIRST BLOCK END-->

    <!--ABOUT-US-->
    <div id="about-us">
        <div class="line">
            <div class="s-12 m-12  l-4">
                <h4>OUR MISSION</h4>
                <hr class="short">
                <p><br>We aim to make clients happy by selling the best products at the best prices, in a friendly, fun atmosphere. Our rating has remained at 100% with excellent and positive feedbacks. We are constantly adding new products.</p>
            </div>
            <div class="s-12 m-12 l-4">
                <h4>OUR MISSION </h4>
                <hr class="short">
                <p><br>We aim to make clients happy by selling the best products at the best prices, in a friendly, fun atmosphere. Our rating has remained at 100% with excellent and positive feedbacks. We are constantly adding new products.</p>
            </div>
            <div class="s-12 m-12 l-4">
                <h4>OUR MISSION</h4>
                <hr class="short">
                <p><br>We aim to make clients happy by selling the best products at the best prices, in a friendly, fun atmosphere. Our rating has remained at 100% with excellent and positive feedbacks. We are constantly adding new products.</p>
            </div>
        </div>
    </div>
    <!--ABOUT-US END-->

    <!--SECOND BLOCK-->
    <div id="second-block">
        <div class="s-12 m-12 l-3 numblock"><h1>10</h1><p>YEARS OF EXPERIENCE</p></div>
        <div class="s-12 m-12 l-3 numblock"><h1>7</h1><p>BUILT HOUSING ESTATES</p></div>
        <div class="s-12 m-12 l-3 numblock"><h1>26</h1><p>QUALIFIED SPECIALISTS</p></div>
        <div class="s-12 m-12 l-3 numblock"><h1>12</h1><p>BUILT AND ENHANCED DESIGNS</p></div>
    </div>
    <!--SECOND BLOCK END-->

    <!-- PHP INCLUDE STATEMENT FOR FOOTER -->
    <?php include('footer.php') ?>
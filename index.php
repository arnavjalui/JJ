<!DOCTYPE html>
<html lang="en-US">
    <head style="position:fixed;">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" />
        <title>HJ</title>     

        <!-- MFG ICONS LINK -->
        <link rel="stylesheet" type="text/css" href="CSS/mfglabs_iconset.css">

        <!-- CSS LINK -->
        <link rel="stylesheet" type="text/css" href="CSS/main_css2.css">
        <link rel="stylesheet" href="CSS/carousel.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- CUSTOM STYLE -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <script type="text/javascript">
            var TxtType = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtType.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

            var that = this;
            var delta = 200 - Math.random() * 100;

            if (this.isDeleting) { delta /= 2; }

            if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
            }

            setTimeout(function() {
            that.tick();
            }, delta);
        };

        window.onload = function() {
            var elements = document.getElementsByClassName('typewrite');
            for (var i=0; i<elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-type');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                  new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
            document.body.appendChild(css);
        };
        </script>


        <style>
        </style>
    </head>
    <body class="size-1140">
        <!--TOP NAVBAR-->
            <header>
                <div id="topbar">
                    <div class="line">
                        <div class="m-12">
                            <p>CONTACT US: <strong>9769983936</strong> | <strong>jahanvijasani.46@gmail.com</strong></p>
                        </div>
                    </div>  
                </div> 
                <nav>
                    <div class="line">
                        <div class="m-8 s-12 l-4">
                            <p class="logo"><strong>Haresh </strong>Jasani</p>
                        </div>
                        <div class="navWide s-12 l-8">
                            <ul class="right">
                                <li class="active-itemactive-item"><a href="#carousel">Home</a></li>
                                <li><a href="#features">Features</a></li>
                                <li><a href="#about-us">About Us</a></li>
                                <li><a href="#our-work">Our Work</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                        <div class="navNarrow m-4 s-12 l-8">
                                <i class="icon-reorder"></i>
                                <div class="narrowLinks hidden">
                                    <li><a href="#carousel">Home</a></li>
                                    <li><a href="#features">Features</a></li>
                                    <li><a href="#about-us">About Us</a></li>
                                    <li><a href="#our-work">Our Work</a></li>
                                    <li><a href="#services">Services</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                </div>
                            <script src="js/index.js"></script>
                        </div>
                    </div>
                </nav>
            </header>
        <!--TOP NAVBAR END-->

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
                <h1>190 YEARS</h1>
                <h2>OF EXPERIENCE IN THE INDUSTRY</h2>
                <p class="typewrite block1" data-period="2000" data-type='[ "A random act of kindness, no matter how small, can make a tremendous impact on someone else&#39;s life" ]'>
                    <span class="wrap"></span></p>
                <div class="s-12 l-2 center"><a class="white-btn" href="#">Contact Us</a></div>
            </div>
        </div>
        <!--FIRST BLOCK END-->

    </body>
</html>
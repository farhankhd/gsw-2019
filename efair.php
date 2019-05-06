<?php
    $pageTitle = 'Entrepreneurship Fair | MIT Global Startup Workshop 2018';
    include('templates/nav-bar.php');
?>

<div class="parallax-window header" data-parallax="scroll" style="background-image: url('headers/img/efair_header.png');">
    <div class="header-overlay">
    <h1 class="parallax-text">
        ENTREPRENEURSHIP FAIR
    </h1>
    </div>
</div>

<body style="background-image: url('images/comp/comp-background.jpg');">

<div class="section">
    <div class="comp-center">
        <h1> ENTREPRENEURSHIP FAIR</h1>
        <h4> Connect with key players in the startup ecosystem and see what our BPC finalists are up to in this special 3-hour event </h4>
        <br>
        <div class="line"></div>
        <br>
        <div class="col-lg-12">
            <div class="col-3"></div>
            <div class="col-6">
                <p  class="white" style="text-align:left">MIT GSW’s Entrepreneurship Fair will feature startups, 
                investors, incubators, accelerators, and other stakeholders in Colombia’s entrepreneurial 
                ecosystem. This event is an incredible networking opportunity and it’s open to all GSW attendees. 
                </p>
                <p  class="white" style="text-align:left">The fair will consist of two sections: the <strong>Startup Showcase</strong> and the <strong>Expo.</strong> </p>
                <!-- <p class="white text-center">Consulte nuestro Reglamento Oficial para más información.</p> -->
            </div>
            <div class="col-3"></div>
        </div>
        <br><br>

        <br>
        
    </div>
    <div class="col-lg-12 text-center">
        <br>
        <div class="line"></div>
        
        <br><br>
    </div>
    <div class="col-lg-12 text-center">
        <div>
            <div class="col-md-6 comp-content">
                <h2> STARTUP SHOWCASE </h2>
                <p> Talk to successful entrepreneurs one-on-one and learn about their startups at this event, 
                which will showcase finalists from the MIT GSW Business Plan Competition. 
                Learn more about our finalists soon! They will be updated here shortly.</p>
                <br><br>
            </div>
            <div class="col-md-6 comp-content">
                <h2> EXPO </h2>
                <p>Meet and connect with key players across the Colombian entrepreneurial ecosystem. 
                This event will feature various organizations, from startups, to investors, 
                to incubators, and other stakeholders.
                </p>
                <p>If you represent a startups or organization related to entrepreneurship 
                and you are interested in participating in the expo, there are still some unfilled booths. 
                Please contact us at 
                <a style="color: white; text-decoration: underline" href="mailto:gsw-contact@mit.edu"> gsw-contact@mit.edu</a> 
                with the subject “Expo Participation Interest”. 
                </p>
                <br><br>
            </div>
        </div>
        
    </div>
</div>

<div class="section">


<div class="text-center">
    <h2>Check out images of the fair from last year!</h2>
    <br>
</div>


<div class="row">
<div class="col-lg-12">
        <div class="container text-center" style="max-width: 100%">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src='images/efair/1.jpg' alt="Picture of Entrepreneurship Fair" style="opacity: 0.8;">
                        <div class="carousel-caption d-none d-md-block">
                            <h3></h3>
                        </div>
                    </div>

                    <div class="item">
                        <img src='images/efair/2.jpg' alt="Picture of Entrepreneurship Fair" style="opacity: 0.8;"> 
                        <div class="carousel-caption d-none d-md-block">
                            <h3></h3>
                        </div>
                    </div>

                    <div class="item">
                        <img src='images/efair/3.jpg' alt="Picture of Entrepreneurship Fair" style="opacity: 0.8;">
                        <div class="carousel-caption d-none d-md-block">
                            <h3></h3>
                        </div>
                    </div>

                    <div class="item">
                        <img src='images/efair/4.jpg' alt="Picture of Entrepreneurship Fair" style="opacity: 0.8;">
                        <div class="carousel-caption d-none d-md-block">
                            <h3></h3>
                        </div>
                    </div>

                    <div class="item">
                        <img src='images/efair/5.jpg' alt="Picture of Entrepreneurship Fair" style="opacity: 0.8;">
                        <div class="carousel-caption d-none d-md-block">
                            <h3></h3>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

</div>
</div>

<script src="assets/js/papaparse.min.js"></script>
<script src="assets/js/main.js?v=1.1"></script>
<script src="assets/js/jquery.min.js"></script>

<?php
include("templates/footer.php");
?>

</body>
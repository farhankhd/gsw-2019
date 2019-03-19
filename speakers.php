<?php
    $pageTitle = 'Speakers | MIT Global Startup Workshop 2018';
    include('templates/nav-bar.php');

    //set headers to NOT cache a page
    header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
    header("Pragma: no-cache"); //HTTP 1.0
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
?>

<div class="parallax-window header" data-parallax="scroll" style="background-image: url('headers/img/speaker_header.jpg');">
    <div class="header-overlay">
    <h1 class="parallax-text">
        Our Speakers
    </h1>
    </div>
</div>

<body style="background-image: url('images/speaker/speaker-background.jpg');">

<div class="section">
    <div class="row text-center">
        <!-- <div class="col-md-6 comp-content" id="keynote-section-expanded">
            <p class="section-header section-header-page" style="color: white">Keynotes</p>
            <div class="row speaker-expanded-bio">
                <div class="col-md-3"></div>
                <div class="col-md-9"></div>
            </div>
        </div>
        <div class="col-md-6 comp-content" id="speaker-section-expanded">
            <p class="section-header section-header-page" style="color: white">Speakers</p>
            <div class="row speaker-expanded-bio">
                <div class="col-md-3"></div>
                <div class="col-md-9"></div>
            </div>
        </div>  -->

        <div class="col-lg-12 comp-content" id="speaker-section-expanded">
            <p class="section-header section-header-page" style="color: white; font-size: 1.7em">Speakers</p>
            <div class="row speaker-expanded-bio">
                <div class="col-md-3"></div>
                <div class="col-md-9"></div>
            </div>
        </div> 
        
    </div>
</div>

<script src="assets/js/papaparse.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/jquery.min.js"></script>

<?php
include("templates/footer.php");
?>

</body>
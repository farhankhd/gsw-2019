<?php
    $pageTitle = 'Speakers | MIT Global Startup Workshop 2018';
    include('templates/nav-bar.php');
?>

<div class="parallax-window header" data-parallax="scroll" style="background-image: url('headers/img/speaker-header.png');">
    <div class="header-overlay">
    <h1 class="parallax-text">
        Our Speakers
    </h1>
    </div>
</div>

<body style="background-image: url('images/speaker/speaker-background.jpg');">

<div class="section">
    <div class="row text-center">
        <div>
        <div class="col-md-6 comp-content" id="keynote-section-expanded">
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
        </div> 
        
    </div>
</div>

<!-- 
<div class="section" id="keynote-section-expanded">
    <p class="section-header section-header-page" style="color: white">Keynotes</p>
    <div class="row speaker-expanded-bio">
        <div class="col-md-3"></div>
        <div class="col-md-9"></div>
    </div>
</div>

<div class="section" id="speaker-section-expanded">
    <p class="section-header section-header-page" style="color: white">Speakers</p>
    <div class="row speaker-expanded-bio">
        <div class="col-md-3"></div>
        <div class="col-md-9"></div>
    </div>
</div> -->

<!-- <div class="section">
    <p class="endSpeakers">Come back soon, more speakers are added every day!</p>
</div> -->

<script src="assets/js/papaparse.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/jquery.min.js"></script>

<?php
include("templates/footer.php");
?>

</body>
<?php
    $pageTitle = 'Speakers | MIT Global Startup Workshop 2018';
    include('templates/nav-bar.php');
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

        <div class="col-lg-12 comp-content" id="speaker-section-expanded">
            <p class="section-header section-header-page" style="color: white; font-size: 1.7em">Speakers</p>
            <h4 style="text-align: justify;">MIT GSW is proud to host a diverse range of speakers from Cambridge, Latin America and around the world. 
            We're excited to have these world class individuals share their experiences with us!
            </h4>

            <h4 style="text-align: justify;"> Click on each speaker to learn more about their background and accomplishments</h4>
            <br> <br>
            <!-- <div class="row speaker-expanded-bio">
                <div class="col-md-3"></div>
                <div class="col-md-9"></div>
            </div> -->

            <div class="col-lg-12 comp-content" id="plenary-section-expanded">
                <p class="section-header section-header-page" style="color: white">Plenary Speakers</p>
                <div class="row speaker-expanded-bio">
                    <div class="col-md-3"></div>
                    <div class="col-md-9"></div>
                </div>
            </div>

            <div class="col-lg-12 comp-content" id="keynote-section-expanded">
                <p class="section-header section-header-page" style="color: white">Keynotes</p>
                <div class="row speaker-expanded-bio">
                    <div class="col-md-3"></div>
                    <div class="col-md-9"></div>
                </div>
            </div>
            <div class="col-lg-12 comp-content" id="speaker-section-expanded">
                <p class="section-header section-header-page" style="color: white">Speakers</p>
                <div class="row speaker-expanded-bio">
                    <div class="col-md-3"></div>
                    <div class="col-md-9"></div>
                </div>
            </div> 

        </div> 
    </div>
</div>

<div id="speaker-modals">

</div>

<div class="modal fade" id="modal-text" tabindex="-1" role="dialog" aria-labelledby="modal-text-label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="document.getElementById('video').pause();">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                

        
            </div>
        </div>
    </div>
</div>

<style>
    .team-speaker {
        min-height: 350px;
    }
</style>


<script src="assets/js/papaparse.min.js"></script>
<script src="assets/js/main.js?v=1.1"></script>
<script src="assets/js/jquery.min.js"></script>

<?php
include("templates/footer.php");
?>

</body>
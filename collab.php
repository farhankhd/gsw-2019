<?php
    $pageTitle = 'Team | MIT Global Startup Workshop 2018';
    include('templates/nav-bar.php');
?>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130174054-2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-130174054-2');
    gtag('send', 'pageview');
    </script>

</head>

<div class="parallax-window header" data-parallax="scroll" style="background-image: url('headers/img/Team.jpg');">
    <div class="header-overlay">
    <h1 class="parallax-text">
        Collaborators
    </h1>
    </div>
</div>

<!-- <div data-parallax="scroll" class="parallax-window header" style="background-image: url('headers/img/Team.jpg');">
    <div class="brand">
    <h1 class="parallax-text">
        Who we are
    </h1>
    </div>
</div> -->
<div class="section text-center">
    <div>
        <div class="col-md-3">

        </div>
        <div class="col-md-3 comp-content">
        <a class="register-btn" style="text-decoration: none;" href="team.php">Who We Are</a>

        </div>
        <div class="col-md-3 comp-content">
        <a class="register-btn" style="text-decoration: none;" href="collab.php">Collaborators</a>
            <br><br>
        </div>
        <div class="col-md-3">
            
        </div>
    </div>
</div>

<div class="section">
    <div style="color:white;">
        Collaborators
    </div>

    <br>

    <div class="section-header section-header-page" style="color: white">Collaborators</div>
<div></div>


<?php
    include('templates/footer.php');
?>

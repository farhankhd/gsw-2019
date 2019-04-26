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

<body>

<div class="section">
    <br>

    <div class="section-header section-header-page" style="color: white">Collaborators</div>
<div>
</div>


<div class="row team-row text-center">

<div class="row team-expanded-bio"><span class="anchor" id="teamAditiGupta"></span><div class="team col-md-5 col-lg-3 text-center"><a href="#teamAditiGupta"><img class="team-picture" src="images/team/Aditi.jpg"></a></div><div class="col-md-7 col-lg-9"><div class="team-expanded-name">Aditi Gupta</div><div class="team-expanded-role">Co-Director</div><div class="team-expanded-text">Aditi is a PhD Candidate in Medical Engineering &amp; Medical Physics in the Harvard-MIT Health Sciences &amp; Technology program. Her research, done with the Human Systems Lab in MIT AeroAstro, focuses on human-exoskeleton adaptation. She is passionate about human-centered design and spends her spare time advocating and working on issues of representation, diversity &amp; equity in STEM. She hopes to one day apply her knowledge and skills to tackling issues of social justice around the world. She hails from Southern California and remains grounded through photography, travel, dance, and spending time in the outdoors with friends and family.</div></div></div>

</div>

</body>

<script src="assets/js/papaparse.min.js"></script>
<script src="assets/js/main.js?v=1.1"></script>
<script src="assets/js/jquery.min.js"></script>

<?php
    include('templates/footer.php');
?>

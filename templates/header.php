<head>
    <meta charset="UTF-8">
    <title><?= $pageTitle ?></title>
    <link rel="shortcut icon" href="favicon.ico"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,400i,500,500i,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://use.fontawesome.com/0b972b6cf8.css" media="all" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
<div data-parallax="scroll" class="parallax-window main-page-header" style="display:inline-block;">

    <div class="brand">
        <img src="images/launch/gsw-heading.png"/>
        <br> <br>
        <img src="images/launch/bogota_plus_dates.png" />
    </div>
    <div class="video-container">
        <!-- <video type='video/mp4' preload="none" autoplay loop muted="muted" plays-inline="" src="images/launch/bogota-drone-footage.mp4"></video> -->
        <video type='video/mp4' preload="none" autoplay loop muted="muted" plays-inline="" src="http://gsw-2019.herokuapp.com/images/launch/bogota-drone-footage.mp4"></video>
    </div>
    
    <div class="brand2">
        <p> footage from worldmoments.org</p>
    </div>
</div>

<div id="registration-section">
    <div class="row text-center">
        <div class="col-xs-12">
            <br />
            <!-- <img class="blob" src="images/launch/blob_01.png" /> -->
            <div class="section-subheader text-center">
                <h4>Applications to attend the conference will open in 2019.</h4>
                <h4>Selected applicants will receive free registration to attend. Sign up to receive updates here!</h4>
            </div>
            <br> <br>
            <a class="register-btn" style="text-decoration: none;" href="https://goo.gl/forms/92yzirmbNllCV0QA3">Stay Updated</a>
            <!-- href="registration.php" -->
            <br> <br><br> <br>
            <div class="line"></div>
            <div class="section-subheader text-center">
                <p>Collaborators</p>
                <div class="container">
                    <div class="row">
                        <img src="images/launch/bogota-team-logo.png" class="partner-logo">
                        <img src="images/launch/legatum_2.png" class="partner-logo">
                        <img src="images/launch/martin_trust_2.png" class="partner-logo">
                        <img src="images/launch/reap_2.png" class="partner-logo">

                    </div>
                </div>
            </div>
            
            <br> <br>
        </div>
    </div>
</div>

<div class="why-section">
    <div class="row">
        <div class="col-xs-12">
            <div class="section-header text-center">
                    <h1>WHY ATTEND?</h1>
            </div>
            <ul>
                <li>Transform your ideas into successful <strong>startups</strong> by gaining valuable <strong>MIT expertise</strong> through workshops</li>
                <li>Learn about cutting edge, innovative <strong>technologies</strong> from <strong>MIT & world experts</strong> through panel discussions</li>
                <li>Participate in the <strong>GSW Competitions</strong> to receive mentorship from renowned entrepreneurs and gain access to exclusive <strong>VIP networking events</strong> </li>
                <li>Display your company in the <strong>GSW Startup Showcase</strong> featuring protected time with investors</li>
                <li>Gain access to top talent and emerging <strong>tech startups</strong></li>
                <li>Learn and understand the <strong>business landscape</strong> in Colombia</li>
                <li>Make fruitful connections with <strong>investors, government officials, corporate representatives,</strong> and more.</li>
            </ul>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="hidden-xs">
            <div class="col-xs-1"></div>
            <div class="col-xs-5">
                <div class="quote">
                    <p class="img-quote">By bringing together cross-sector experts</br>and leaders, GSW has built a global</br>support network, empowering and accelerating</br>entrepreneurship in emerging markets,</br>from Seoul to Madrid, Cape Town to Santiago.</p>
                    <p class="quote-name">L. Rafael Reif</p>
                    <p class="quote-position">President of MIT</p>
                </div>
            </div>
            <img src="images/launch/rafael_reif.jpg" class="img-responsive hidden-xs" alt="Statement from L. Rafael Reif, president of MIT: By bringing together cross-sector experts and leaders, GSW has built a global support network, empowering and accelerating entrepreneurship in emerging markets, from Seoul to Madrid, Cape Town to Santiago. And now Bogota."/>
        </div>
        <img src="images/launch/gsw-rafael-reif-mobile.jpg" class="img-responsive visible-xs-block" alt="Statement from L. Rafael Reif, president of MIT: By bringing together cross-sector experts and leaders, GSW has built a global support network, empowering and accelerating entrepreneurship in emerging markets, from Seoul to Madrid, Cape Town to Santiago. And now Bogota."/>
    </div>
</div>

<div class="why-section">
    <div class="row">
    <br>
    <div class="section-header text-center">
            <h1>THE VENUE</h1>
    </div>
    <div class="text-center">
        <p>El Cubo - Business and Recreation Center (Colsubsidio)</p>
        <p>Ak. 30 #52-77, Bogota, Colombia</p>
    </div>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-xs-6" style="width: 33vw; height: 23vw; padding: 10px; display: inline-block;" id="map">
            </div>
            <div class="col-xs-6">
                <img class="why-img" src="images/landing-page/colsubsidio.jpg" />
            </div>
        </div>
    </div>

    <script>
    function initMap() {
        // The location of cubo
        var cubo = {lat: 4.64216, lng: -74.079369};
        // The map, centered at cubo
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 10, center: cubo});
        // The marker, positioned at cubo
        var marker = new google.maps.Marker({position: cubo, map: map});
        }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaFHhMXs5pzFzWb2ZfhTD3uyAuFeU_15U&callback=initMap">
    </script>
</div>
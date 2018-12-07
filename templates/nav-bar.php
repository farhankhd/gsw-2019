<?php
    // Increase this version every time you change the style.css file
    // See more in https://css-tricks.com/strategies-for-cache-busting-css/#article-header-id-1
    $cssVersion = "1.0.1";
?>

<!DOCTYPE html>
<html lang="en">
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
<nav class="navbar navbar-default navbar-fixed-top" id="nav">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button> -->
            <img src="images/landing-page/logo2.png" id="navbar-logo"/>
            <!-- <div>
                <a class="navbar-brand" href="index.php"><img src="images/landing-page/logo2.png" id="navbar-logo"></a>
            </div>
            <div>
                <a class="navbar-brand" href="index.php"><img src="images/launch/bogota-team-logo.png" id="navbar-logo-right"></a>
            </div> -->
            <!-- <a class="navbar-brand" href="index.php"><img src="images/landing-page/logo2.png" id="navbar-logo"></a>
            <a class="navbar-brand" href="index.php"><img src="images/launch/bogota-team-logo.png" id="navbar-logo"></a> -->
            
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-mobile" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
                <li><a href="gsw.mit.edu/2018">GSW 2018</a></li>
                <!-- <li><a href="registration.php">Registration</a></li>
                <li><a href="speakers.php">Speakers</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Competitions <span class="caret"></span>
                    </a>
                    <div id="competitionMenu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="startup-showcase.php">Startup <br />Showcase</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="epc.php">Elevator Pitch <br /> Competition</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="bpc.php">Business Plan <br />Competition</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="mentors.php">Mentors</a>
                    </div>
                </li> -->
            </ul>
            <ul class="nav navbar-nav navbar-right" id="navbarDropdown" >
            <img src="images/launch/bogota-team-logo.png" id="navbar-logo-right">
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About <span class="caret"></span>
                    </a>
                    <div id="aboutMenu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="history.php">History</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="team.php">Who we are</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="sponsors.php">Sponsors</a>
                    </div>
                </li> -->
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
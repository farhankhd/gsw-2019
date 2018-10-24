<!DOCTYPE HTML>
<html>
	<head>
		<title>GSW 2019</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/style.css" />
        
        <!-- Bootstrap CSS File -->
        <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    
	<body class="landing-page-img">

        <div class=col> 
            <div class="logo-img">
                <img src="../../images/landing-page/logo.png" />
            </div>
        </div>
        <div class="col"> 
            <section id="banner2" class="landing-text">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            
                        </div>
                        <div class="col">
                            <p>MIT GSW 2019 </p>
                            <p>Conference Location</p>
                            <p>Dates Will Be Announced In</p>
                            <p id="demo"> </p>
                            <br>
                            
                            <p style="font-size: 1vw"> <a href="http://gsw.mit.edu/2018/">See</a> GSW 2018 in Thailand</p>

                            <script>
                                // Set the date we're counting down to
                                var countDownDate = new Date("Jan 1, 2019 15:37:25").getTime();

                                // Update the count down every 1 second
                                var x = setInterval(function() {

                                    // Get todays date and time
                                    var now = new Date().getTime();
                                    
                                    // Find the distance between now and the count down date
                                    var distance = countDownDate - now;
                                    
                                    // Time calculations for days, hours, minutes and seconds
                                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                    
                                    // Output the result in an element with id="demo"
                                    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                                    + minutes + "m " + seconds + "s ";
                                    
                                    // If the count down is over, write some text 
                                    if (distance < 0) {
                                        clearInterval(x);
                                        document.getElementById("demo").innerHTML = "EXPIRED";
                                    }
                                }, 1000);
                                </script>
                        </div>
                    </div>
                    
                    
            </section>
        </div>
        
		<!-- Scripts -->
			<!-- <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script> -->
            
            <script src="lib/jquery/jquery.min.js"></script>
            <script src="lib/jquery/jquery-migrate.min.js"></script>
            <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>

	</body>
</html>
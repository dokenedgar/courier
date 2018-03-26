<?php
session_start();
function redirect_to($location){
header("Location: $location");
exit;
}

if (!isset($_SESSION['AdminUser'])){
  $_SESSION['notLogged']   = 'yes';
  redirect_to("admin.php");
}
$_SESSION['adminpage']   = 'track';
?>

<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Track Shipment</title>
<?php include('adminHeaders.html'); ?>
</head>
<body>
<!-- navigation -->
<?php include('adminNav.php'); ?>
<!-- navigation -->
<!-- banner section -->
<section class="inner-w3ls">
	<div class="container">
		<h2 class="text-center w3 w3l agileinfo wthree">About Courier Store</h2>
		<p class="text-center w3 w3l agileinfo wthree">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
	</div>
</section>
<!-- /banner section -->
<section class="about-w3ls">
	<div class="container">
        <!-- Intro Content -->
                <div class="row">
            <div class="col-lg-12">
				<i class="fa fa-braille" aria-hidden="true"></i>
                <h3 class="text-center">Enter Tracking Code</h3>		</div>
        </div>
        <div class="row">
        			<div class="col-lg-4 col-md-4 col-sm-6">
			
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6">
			<form method="POST" action="track_details.php" name="trackForm" id="trackForm" onsubmit="return validateTrackForm()">
		
		
        		<div class="form-group">
					<center><label for="trackid">Tracking id:</label></center>
					<input type="text" class="form-control" id="trackid" name="trackid" required>
				</div>
				<br>

				<div class="form-group">
		<center>		<button type="submit" name="submit" id="submit" class="btn btn-primary">Get Records</button></center>
				</div>
					<br>
        		</form>
        		<script type="text/javascript">
					function validateTrackForm() {
					    var x = document.forms["trackForm"]["trackid"].value;
					    if (x == null || x == "" ) {
					        alert("Tracking id must be filled out " + x);
	        				return false;
    					}    					
    					else{
    						document.cookie="trackid"+"="+x;
    					}
    					

					}
				</script>		
        		<p class="track-p1">Contact Us :</p>
							<p class="track-p2"><a href="mailto:mail@example.com">mail@example.com</a></p>
		</div>
		
		<div class="col-lg-4 col-md-4 col-sm-6">
			
		</div>
		<div class="clearfix"></div>
        </div>
        <!-- /.row -->
	</div>
</section>	
        <!-- Team Members -->
	
<!-- footer section -->
<section class="footer-agileits">
	<div class="container">
		<div class="col-lg-3 col-md-3 col-sm-6">
			<h3>More Info</h3>
			<ul class="info-links">
				<li><a href="about.html"><i class="fa fa-hand-o-right" aria-hidden="true"></i> About Us</a></li>
				<li><a href="contact.html"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="icons.html"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Icons</a></li>
				<li><a href="privacy.html"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Privacy Policy</a></li>
			</ul>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6">
			<h3>Our Links</h3>
			<ul class="footer-links">
				<li><a href="service.html"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Our Services</a></li>
				<li><a href="work.html"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Our Work</a></li>
				<li><a href="process.html"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Process</a></li>
				<li><a href="typo.html"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Typography</a></li>
			</ul>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6">
			<h3>Contact Info</h3>
			<div class="contact-info">
				<div class="address">	
					<i class="glyphicon glyphicon-globe"></i>
					<p class="p3">77 Jack Street</p>
					<p class="p4">Chicago, USA</p>
				</div>
				<div class="phone">
					<i class="glyphicon glyphicon-phone-alt"></i>
					<p class="p3">+1 515 151515</p>
					<p class="p4">+00 1010101010</p>
				</div>
				<div class="email-info">
					<i class="glyphicon glyphicon-envelope"></i>
					<p class="p5"><a href="mailto:myemail1@example.com">myemail1@example.com</a></p> 
					<p class="p6"><a href="mailto:myemail2@example.com">myemail2@example.com</a></p>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6">
			<h3>Subscribe Us</h3>
			<div class="subscribe">
				<form action="#" method="post">
					<div class="form-group">
						<input type="email" name="email2" class="form-control" id="inputEmail1" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="text" name="user" class="form-control" id="text1" placeholder="Your Name">
					</div>
					<div class="form-group">
						<button type="submit" class="btn-outline">Subscribe</button>
					</div>
				</form>
			</div>	
			<ul class="social-icons2">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
		<hr>
		<p class="copyright">© 2016 Courier Store. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts</a></p>
	</div>
</section>
<!-- /footer section -->
<a href="#0" class="cd-top">Top</a>
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script src="js/index.js"></script>
<script src="js/top.js"></script> 
<!-- /js files -->
</body>
</html>
			
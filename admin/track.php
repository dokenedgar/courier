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
<title>Track Shipment - Kenday Logistics</title>
<?php include('adminHeaders.html'); ?>
</head>
<body>
<!-- navigation -->
<?php include('adminNav.php'); ?>
<!-- navigation -->
<!-- banner section -->
<section class="inner-w3ls">
	<div class="container">
		<h2 class="text-center w3 w3l agileinfo wthree">ADMIN KENDAY LOGISTICS</h2>
		<p class="text-center w3 w3l agileinfo wthree"></p>
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
				<!--
        		<p class="track-p1">Contact Us :</p>
							<p class="track-p2"><a href="mailto:mail@example.com">mail@example.com</a></p>
					-->
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
<?php include('adminFooter.php') ?>
<!-- /footer section -->
<a href="#0" class="cd-top">Top</a>
<!-- js files -->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/SmoothScroll.min.js"></script>
<script src="../js/index.js"></script>
<script src="../js/top.js"></script>  
<!-- /js files -->
</body>
</html>
			
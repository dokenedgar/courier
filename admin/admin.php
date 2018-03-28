<?php
session_start();
//$_SESSION['adminpage']   = 'track';
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
<title>Admin - Kenday Logistics</title>
<?php include('adminHeaders.html'); ?>
</head>
<body>
<!-- navigation -->
<?php //include('adminNav.php'); ?>
<!-- navigation -->
<!-- banner section -->
<section class="inner-w3ls">
	<div class="container">
		<h2 class="text-center w3 w3l agileinfo wthree">ADMIN KENDAY LOGISTICS</h2>
	</div>
</section>
<!-- /banner section -->
<section class="about-w3ls">
	<div class="container">
        <!-- Intro Content -->
        <div class="row">
            <div class="col-lg-12">
				<i class="fa fa-braille" aria-hidden="true"></i>
                <h3 class="text-center">Login To Your Account</h3>				
				

            </div>
        </div>
        <div class="row">
        			<div class="col-lg-4 col-md-4 col-sm-6">
			
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6">
			<form method="POST" action="login.php" name="loginForm" onsubmit="return validateLoginForm()">
		
		<?php
		if (isset($_SESSION['notLogged']) ) {
			# code...
			echo '
			<div class="alert alert-danger">
                      <strong>Not logged in!</strong> Log in to access the admin panel.
                    </div>
               ';
               unset($_SESSION['notLogged']);
		}
			  
           ?>

        		<div class="form-group">
					<label for="username">Username:</label>
					<input type="text" class="form-control" id="username" name="username" required>
				</div>
				<br>

				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" class="form-control" id="password" name="password" required>
				</div>

				<br>
				<div class="form-group">
		<center>		<button type="submit" name="submit" id="submit" class="btn btn-primary">Sign In</button></center>
				</div>
					<br>
        		</form>
        		<script type="text/javascript">
					function validateLoginForm() {
					    var x = document.forms["loginForm"]["username"].value;
					    var y = document.forms["loginForm"]["password"].value;
					    if (x == null || x == "") {
					        alert("Username must be filled out");
	        				return false;
    					}
    					if (y == null || y == "") {
					        alert("Password must be filled out");
	        				return false;
    					}

					}
				</script>		
				<!--
        		<p class="track-p1">Contact Us :</p>
							<p class="track-p2"><a href="mailto:mail@example.com">customerservice@kendaylogistics.com</a></p>
							-->
		</div>
		
		<div class="col-lg-4 col-md-4 col-sm-6">
			
		</div>
		<div class="clearfix"></div>
        </div>
        <!-- /.row -->
	</div>
</section>	

	
<!-- footer section -->
<?php include('adminFooter.php') ?>
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
			
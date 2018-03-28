<?php
session_start();
$_SESSION['page']   = 'index';
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
<title>Home - Kenday Logistics</title>
<?php include('headerfiles.html') ?>
</head>
<body>
<?php include('navigation.php')  ?>
<!-- banner section -->
<section class="banner-w3ls">
	<div class='header'>
		<div class="banner-w3layouts">
			<div class="container">
				<h2 class="text-center w3 w3l agileinfo">Kenday Logistics Services</h2>	
				<p class="text-center w3 w3l agileinfo">The leading brand when it comes to logistic services</p>
			</div>
		</div>
	</div>
</section>
<!-- /banner section -->
<!-- specialization section -->
<section class="special-w3layouts">
	<div class="container">
		<h3 class="text-center wthree w3-agileits">Our Specialities</h3>
		<p class="text-center wthree w3-agileits">We're the industry standard when it comes to:</p>
		
		<div class="col-lg-4 col-md-4 col-sm-6">
			<img src="images/eye.png" alt="" class="img-responsive">
			<h4 class="text-center">Automated Tracking</h4>
			<p class="special-p1">With our state of the art automated tracking system, we keep an eye on where our cargo / fleets are at all times.</p>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6">
			<img src="images/monitor.png" alt="" class="img-responsive">
			<h4 class="text-center">Tracking API</h4>
			<p class="special-p1">Always know the delivery status of your packages.</p>
		</div>
		
		<div class="col-lg-4 col-md-4 col-sm-6">
			<img src="images/truck.png" alt="" class="img-responsive">
			<h4 class="text-center">Delivered In Time</h4>
			<p class="special-p1">With our wide array of machineries and networks, your packages always arrive on time.</p>
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<!-- /specialization section -->
<!-- 2nd banner section -->
<section class="banner-w3ls2">
	<div class="container">
		<h3 class="text-center agileits-w3layouts agile w3-agile">Giving The Best Solutions</h3>
	</div>
</section>
<!-- /2nd banner section -->
<!-- 2nd info section -->
<section class="info-w3ls2">
	<div class="container">
		<i class="fa fa-trophy" aria-hidden="true"></i>
		<h3 class="text-center agileits-w3layouts agile w3-agile">We Always Deliver The Best Of Our Services</h3>
		<p class="text-center">Nam commodo viverra lectus, tempor vehicula libero varius convallis. Nullam placerat, eros non efficitur vulputate, leo nisi interdum odio, sed sodales eros ex vitae nisi.</p>
	</div>
</section>
<!-- /2nd info section -->

<!-- 3rd info section -->
<section class="info-w3ls3">
	<div class="container">
		<i class="fa fa-smile-o" aria-hidden="true"></i>
		<h3 class="text-center">Making Our Customers Happy</h3>
		<p class="text-center">Fusce at aliquet metus. Duis magna lorem, mollis tincidunt felis sit amet, efficitur consequat lorem. In eget accumsan enim, id congue est.</p>
	</div>
</section>
<!-- /3rd info section -->
<!-- footer section -->
<?php include('footer.php') ?>
<!-- /footer section -->
<a href="#0" class="cd-top">Top</a>
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script src="js/index.js"></script>
<script src="js/top.js"></script> 
<script src="js/bgfader.js"></script>
<script>
var myBgFader = $('.header').bgfader([
  'images/banner1-1.jpg',
  'images/banner1-2.jpg',
  'images/banner1-3.jpg',
  'images/banner1-4.jpg',
], {
  'timeout': 2000,
  'speed': 3000,
  'opacity': 0.4
})

myBgFader.start()
</script>
<!-- /js files -->
</body>
</html>
		
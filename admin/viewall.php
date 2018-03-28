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
$_SESSION['adminpage']   = 'viewall';
?>

<!DOCTYPE html>
<html>
<head>
<title>View All Orders - Kenday Logistics</title>
<script src="https://www.gstatic.com/firebasejs/4.11.0/firebase.js"></script>
	<script src="https://www.gstatic.com/firebasejs/4.11.0/firebase-firestore.js"></script>
	<link href="../css/colorfulTab.min.css" rel="stylesheet" type="text/css" media="all" />
<?php include('adminHeaders.html') ?>



</head>
<body onload="loadalldata()" >

<!-- navigation -->
<?php include('adminNav.php') ?>
<!-- navigation -->
<!-- banner section -->

<!-- /banner section -->
<!-- transit section -->
<br>
<section class="transit-w3ls">
	<div class="container">
		<i class="fa fa-trophy" aria-hidden="true"></i>
		<h3 class="text-center">Transit Locations</h3>
		<p class="text-center"></p>
	</div>
	<div class="container">
	<div id="loader"></div>
	<div style="display:none;" id="myDiv" class="animate-bottom">
		<div class="colorful-tab-wrapper" id="colorful-flatline">
			<ul class="colorful-tab-menu">
				<li class="colorful-tab-menu-item active" tab-color="#445370"><a href="">ORDERS</a></li>
			</ul>
			<div class="colorful-tab-container">  
				<div class="colorful-tab-content active" id="fl-0"> 
					<div class="skill-info">
						<div class="table-responsive">
							<table class="table" id="ordersTable">
								<thead>
									<tr>
										<th>Id</th>
										<th>Sender</th>
										<th>Receiver</th>
									<!--<th>Sender Add</th>
										<th>Receiver Add</th>
										-->
										<th>Origin</th>
										<th>Destination</th>
									<!--<th>Shipment Desc</th>-->
										<th>Shipment Date</th>
										<th>Arrival</th>
									<!--<th>Current Location</th> -->
										<th>Transit Time Left</th>
									<!--<th>Delivery Status</th>-->
									</tr>
								</thead>
								<tbody>
								<!--
									<tr>
										<td>
											
											<h4>Washington.DC</h4>
											<div class="clearfix"></div>
										</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
										<td>Pending</td>
										<td>Pending</td>
									</tr>
									-->
								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
		</div>
  <!-- Flatline -->
  </div>
	</div>
</section>
<!-- /transit section -->
        <!-- Team Members -->
	<script type="text/javascript" src="viewall.js"></script>
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
<script type="text/javascript" src="../js/colorfulTab.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        
        $("#colorful").colorfulTab();    
        
        $("#colorful-elliptic").colorfulTab({
            theme: "elliptic"
        }); 
       
       $("#colorful-flatline").colorfulTab({
            theme: "flatline"
        });    
        
        $("#colorful-background-image").colorfulTab({
            theme: "flatline",
            backgroundImage: "true",
            overlayColor: "#2d3305",
            overlayOpacity: "0.8"
        });   
    
    });
  </script>
<!-- /js files -->
</body>
</html>

<?php
session_start();

function redirect_to($location){
header("Location: $location");
exit;
}
/*
if (!isset($_SESSION['AdminUser'])){
  $_SESSION['notLogged']   = 'yes';
  redirect_to("admin.php");
}
$_SESSION['adminpage']   = 'track';
*/
?>

<!DOCTYPE html>
<html>
<head>
<title>Track Orders - Kenday Logistics Services</title>
<script src="https://www.gstatic.com/firebasejs/4.11.0/firebase.js"></script>
	<script src="https://www.gstatic.com/firebasejs/4.11.0/firebase-firestore.js"></script>
	<link href="css/colorfulTab.min.css" rel="stylesheet" type="text/css" media="all" />
<?php include('headerfiles.html') ?>

<style>
@media only screen and (max-width: 600px) {
    body {

        /*background-color: lightblue; */
    }
    #phoneLoader {
        display: none;
}
#phoneData {
        display: none;
}
    #loader {
        display: none;
    }
    #myDiv {
        display: none;
    }
    
}
@media only screen and (min-width: 601px) {
    body {

       /* background-color: green; */
    }
    
    #phoneLoader {
        display: none;
	}
	#phoneData {
        display: none;
	}
}
.cards {
    /* Add shadows to create the "card" effect */
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
}

/* On mouse-over, add a deeper shadow */
.cards:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.containerCard {
    padding: 2px 16px;
}


</style>
</head>
<body onload="trackOrder()" >
<!-- navigation -->
<?php include('navigation.php') ?>
<!-- navigation -->
<!-- banner section -->

<!-- /banner section -->
<!-- transit section -->
<section class="transit-w3ls">
<br>
	<div class="container">
		<i class="fa fa-trophy" aria-hidden="true"></i>
		<h3 class="text-center">Transit Location</h3>
		<p class="text-center"></p>
	</div>
	<div class="container">
	
<div id="phoneLoader" >
<center><img src="images/ajax-loader.gif" alt="Computer Man" style="width:50px;height:50px;"> </center>
</div>

<div id="phoneData">
<center>
<div  class="cards" >
  <div class="containerCard">
    <h4><b>Tracking Code</b></h4> 
    <p id="trackcode">Architect & Engineer</p> 
  </div>
  </div>
  <br>
  <div  class="cards">
  <div class="containerCard">
    <h4><b>Sender Name</b></h4> 
    <p id="sender">Architect & Engineer</p> 
  </div>
  </div>
  <br>
  <div  class="cards" >
  <div class="containerCard">
    <h4><b>Receiver</b></h4> 
    <p id="receiver">Architect & Engineer</p> 
  </div>
</div>
<br>
  <div  class="cards" >
  <div class="containerCard">
    <h4><b>Origin</b></h4> 
    <p id="origin">Architect & Engineer</p> 
  </div>
</div>
<br>
  <div  class="cards" >
  <div class="containerCard">
    <h4><b>Destination</b></h4> 
    <p id="destination">Architect & Engineer</p> 
  </div>
</div>
<br>
  <div  class="cards" >
  <div class="containerCard">
    <h4><b>Shipment Date</b></h4> 
    <p id="shipmentDate">Architect & Engineer</p> 
  </div>
</div>
<br>
  <div  class="cards" >
  <div class="containerCard">
    <h4><b>Arrival Date</b></h4> 
    <p id="arrival">Architect & Engineer</p> 
  </div>
</div>
<br>
  <div  class="cards" >
  <div class="containerCard">
    <h4><b>Transit Time Left</b></h4> 
    <p id="transitTimeLeft">Architect & Engineer</p> 
  </div>
</div>

</center>
</div>
	

	<div id="loader"></div>
	<div  id="myDiv" class="animate-bottom">
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
										<!--<th>Shipment Desc</th> -->
										<th>Shipment Date</th>
										<th>Arrival</th>
										<!--<th>Current Location</th>
										<th>Route</th> -->
										<th>Transit Time Left</th>
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
  <!-- style="display:none;" Flatline -->
</div>

	</div>
</section>
<!-- /transit section -->
        <!-- Team Members -->
	<script type="text/javascript" src="tracks.js"></script>
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
<script type="text/javascript" src="js/colorfulTab.min.js"></script>
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

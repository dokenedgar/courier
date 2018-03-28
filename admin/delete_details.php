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
$_SESSION['adminpage']   = 'delete';
?>

<!DOCTYPE html>
<html>
<head>
<title>Delete Order - Kenday Logistics</title>
<script src="https://www.gstatic.com/firebasejs/4.11.0/firebase.js"></script>
	<script src="https://www.gstatic.com/firebasejs/4.11.0/firebase-firestore.js"></script>
<?php include('adminHeaders.html') ?>
</head>
<body onload="deleteRecord()">

<!-- navigation -->
<?php include('adminNav.php') ?>
<!-- navigation -->
<!-- banner section -->

<!-- /banner section -->
<section class="about-w3ls">
	<div class="container">
        <!-- Intro Content -->
        <div class="row">
            <div class="col-lg-12">
				<br>
                <h3 class="text-center">Delete An Order</h3>
                <p><div class="container">    
  <div class="row">
<div id="loader"></div>
  <div style="display:none;" id="myDiv" class="animate-bottom">

  <div class="col-md-2"></div>
    <div class="col-md-4"> 
    
    <div class="form-group">
          <label for="senderName">Sender Name:</label>
          <input type="text" class="form-control" id="senderName" maxlength="25" name="senderName" readonly required>
        </div>
<!--
        <div class="form-group">
          <label for="senderAddress">Sender Address:</label> 
          <textarea class="form-control" rows="5" id="senderAddress" maxlength="4096" name="senderAddress" readonly required></textarea>
        </div>
        -->
        <div class="form-group">
          <label for="sourceArea">Originating Service Area:</label>
          <input type="text" class="form-control" id="sourceArea" maxlength="25" name="sourceArea" readonly required>
        </div>
<!--
        <div class="form-group">
          <label for="shipmentDesc">Shipment Description:</label> 
          <textarea class="form-control" rows="5" id="shipmentDesc" maxlength="4096" name="shipmentDesc" readonly required></textarea>
        </div>
      -->
        <div class="form-group">
          <label for="shipmentDate">Shipment Date:</label>
          <input type="text" class="form-control" id="shipmentDate" maxlength="25" name="shipmentDate" readonly required>
        </div>
		
		<div class="form-group">
          <label for="arrivalDate">Arrival Date:</label>
          <input type="text" class="form-control" id="arrivalDate" maxlength="25" name="arrivalDate" readonly required>
        </div>
        

</div>
<div class="col-md-4"> 
        <div class="form-group">
          <label for="receiverName">Receiver Name:</label>
          <input type="text" class="form-control" id="receiverName" maxlength="25" name="receiverName" readonly required>
        </div>
        <!--
<div class="form-group">
          <label for="receiverAddress">Receiver Address:</label> 
          <textarea class="form-control" rows="5" id="receiverAddress" maxlength="4096" name="receiverAddress" readonly required></textarea>
        </div>
        -->
        <div class="form-group">
          <label for="destinationArea">Destination Service Area:</label>
          <input type="text" class="form-control" id="destinationArea" maxlength="25" name="destinationArea" readonly required>
        </div>
		<!--
		<div class="form-group">
          <label for="currentLocation">Current Location:</label>
          <input type="text" class="form-control" id="currentLocation" maxlength="25" name="currentLocation" readonly required>
        </div>
      -->
        <div class="form-group">
          <label for="transitTimeLeft">Transit Time Left:</label>
          <input type="text" class="form-control" id="transitTimeLeft" maxlength="25" name="transitTimeLeft" readonly required>
        </div>
	<!--
		<div class="form-group">
          <label for="deliveryStatus">Delivery Status:</label>
          <input type="text" class="form-control" id="deliveryStatus" maxlength="25" name="deliveryStatus" readonly required>
        </div>
        -->

        
<br>
        <div class="form-group">
          <button id="deletebutton" class="btn btn-danger">Delete Record</button>
          <i id="loadSpinner" class="fa fa-spinner fa-spin" style="display:none;"></i>
        </div>
        
      
      <script type="text/javascript" src="deletes.js"></script> 

    </div>
</div>

  </div>
  <!-- /.row -->
</div></p>
            </div>
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

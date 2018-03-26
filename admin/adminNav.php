<!-- navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html"><h1><span class="fa fa-plane" aria-hidden="true"></span>Courier Store</h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li <?php if (strcmp ($_SESSION['adminpage'], 'addorder') == 0):?>	class="active" <?php endif ?> > <a href="" data-toggle="modal" data-target="#idModal">Add Order</a></li>
				<li <?php if (strcmp ($_SESSION['adminpage'], 'viewall') == 0):?>	class="active" <?php endif ?> ><a href="viewall.php">View All Orders</a></li>
				<li <?php if (strcmp ($_SESSION['adminpage'], 'edit') == 0):?>	class="active" <?php endif ?>><a href="edit.php">Edit Order</a></li>
				<li <?php if (strcmp ($_SESSION['adminpage'], 'delete') == 0):?>	class="active" <?php endif ?>><a href="delete.php">Delete Order</a></li>
				<li <?php if (strcmp ($_SESSION['adminpage'], 'track') == 0):?>	class="active" <?php endif ?>><a href="track.php">Track Order</a></li>
				<li <?php if (strcmp ($_SESSION['adminpage'], 'signout') == 0):?>	class="active" <?php endif ?>><a href="signout.php">Sign Out</a></li>	
			</ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<!-- navigation -->
<div id="idModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">  </h4>
      </div>
      <div class="modal-body">
     
        <div class="card-block">
		<center>
		<form method="POST" action="addorder.php" onsubmit="return validateid()" name="trackForm" >
			 <div class="form-group">
          <label for="trackid">Enter Tracking ID:</label>
          <input type="text" class="form-control" id="trackid" maxlength="25" name="trackid"  required="">
        	</div>
			</center>

        <div class="form-group">
        <center><button type="submit" class="btn btn-primary">Proceed</button></center>
        </div>
        <script type="text/javascript">
					function validateid() {
					    var x = document.forms["trackForm"]["trackid"].value;
					    if (x == null || x == "") {
					        alert("ID must be filled out");
	        				return false;
    					}
    					else{
    						document.cookie="trackid"+"="+x;
    					}

					}
				</script>		
		</form>
	
	</div>	

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>

  </div>
</div>
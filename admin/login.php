<?php 
session_start();
function redirect_to($location){
header("Location: $location");
exit;
}

//$_POST['state']= 'zamfara';
if(isset($_POST['submit']))
 {
	$dbhostname = "127.0.0.1";	
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "courier";
	$link = mysqli_connect($dbhostname,$dbusername,$dbpassword, $dbname);
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	if(!$link){
		die("Error in connection ".mysqli_connect_error());
	}
	else{
		
           $query = mysqli_query($link, "select * from login where username='$username' and password='$password'");
                if ($row = mysqli_fetch_assoc($query)){
                    //$output[] = $row;
                    $_SESSION['AdminUser'] = true;
                    redirect_to("adminlanding.php");
                //	echo "SUCCESS";
                }
                else{
                	redirect_to("admin.php");
                //	echo "NOT SUCCESSFUL";
                }
				mysqli_free_result($query);
		   //echo json_encode(array("companies"=>$output));
	}

  }

  ?>
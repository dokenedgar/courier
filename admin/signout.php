<?php
// 4 steps in closing a session i.e logging out

//1 Find the session
session_start();
function redirect($location){
header ("Location: $location");
exit;
}	

//2 unset all session variables
			/*unset($_SESSION['id_num']);
			unset($_SESSION['fname']);
 			unset($_SESSION['sname']);
			unset($_SESSION['dept']);
			unset($_SESSION['hid']);
			unset($_SESSION['hname']);
			unset($_SESSION['level']);
			unset($_SESSION['pin']);
			unset($_SESSION['username']);
			*/
			
$_SESSION = array();

// 3. Destroy the session cookie
		//if(isset($_COOKIE[session_name()])) {
			//setcookie(session_name(), '', time()-42000, '/');
		//}
		
// 4. Destroy the session
session_destroy();
//redirect to either index/home page or the login page
redirect("admin.php");
															
?>

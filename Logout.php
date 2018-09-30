<?php   
session_start();
if(isset($_SESSION['login_user'])){
	unset($_SESSION['login_user']);  
}
else if (isset($_SESSION['guide_user_signup'])) {
	unset($_SESSION['guide_user_signup']);
}
session_destroy();  
header("location:index.php");
?> 
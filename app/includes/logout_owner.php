<?php	 
session_start();
unset ($SESSION['email']);
session_destroy();
	 
header('location: ../login_owner/login_owner2.views.html');	 
?>
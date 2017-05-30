<?php
include("db_connect.php");
session_start();

if(!empty($_SESSION['Email'])) {
      header("location: ../user_views/main.php");
      exit;
}

if($_POST && !empty($_POST['Email']) && !empty($_POST['Password'])) {     
      // username and password sent from form 
      $myemail = mysqli_real_escape_string($mysqli,$_POST['Email']);
      $mypassword = mysqli_real_escape_string($mysqli,$_POST['Password']); 
      
      $sql = "SELECT id_U FROM User WHERE email_U = '$myemail' AND password_U = '$mypassword'";
      $result = mysqli_query($mysqli,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
         $_SESSION['Email'] = $myemail;
         $_SESSION['type'] = "user";
         header("Location: ../user_views/main.php");
      }else {
            session_destroy();
            $error_message = "Email o Password incorrectos";
         
            header("Location: ../login_user/login_user.views.php");
      }
   }
?>
<?php
include("db_connect.php");
session_start();

if(!empty($_SESSION['Email'])) {
      header("location: ../owner_homepage/owner_homepage.views.php");
      exit;
}

if($_POST && !empty($_POST['Email']) && !empty($_POST['Password'])) {     
      // username and password sent from form 
      $myemail = mysqli_real_escape_string($mysqli,$_POST['Email']);
      $mypassword = mysqli_real_escape_string($mysqli,$_POST['Password']); 
      
      $sql = "SELECT id_o FROM Owner WHERE email_o = '$myemail' AND password_U = '$mypassword'";
      $result = mysqli_query($mysqli,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
         $_SESSION['Email'] = $myemail;
         $_SESSION['type'] = "owner";
         header("Location: ../owner_homepage/owner_homepage.views.php");
      }else {
            session_destroy();

         //Agregar pagina que no estas registrado
         header("Location: ../login_owner/login_owner2.views.php");
      }
   }
?>
<?php
include("db_connect.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      // username and password sent from form 
      $myemail = mysqli_real_escape_string($mysqli,$_POST['Email']);
      $mypassword = mysqli_real_escape_string($mysqli,$_POST['Password']); 
      
      $sql = "SELECT Id FROM accounts WHERE Email = '$myemail' and Password = '$mypassword'";
      $result = mysqli_query($mysqli,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
         session_register("myemail");
         $_SESSION['user'] = $myemail;
         
         header("location: ../user_views/main.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         //Agregar pagina que no estas registrado
         header("location: ../login_user/login_user.views.php");
      }
   }
?>
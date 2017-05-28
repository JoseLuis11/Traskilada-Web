<?php
   include('db_connect.php');
   session_start();
   
   $user_check = $_SESSION['user'];
   
   $ses_sql = mysqli_query($mysqli,"select Email from account where Email = '$user_check'");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['Email'];
   
   if(!isset($_SESSION['user'])){
      header("location:../login_user/login_user.views.php");
   }
?>
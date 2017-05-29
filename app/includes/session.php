<?php
    include('db_connect.php');
    session_start();
   
    if(!empty($_SESSION['Email'])){

        $user_check = $_SESSION['Email'];
        
        $ses_sql = mysqli_query($mysqli,"SELECT Email FROM account WHERE Email = '$user_check' ");
        
        $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
        
        $login_session = $row['Email'];
        
        if(!isset($_SESSION['Email'])){

            header("location:../login_user/login_user.views.php");
        }
   }else{
       session_destroy();
       header("location: ../login_user/login_user.views.php");
   }
?>
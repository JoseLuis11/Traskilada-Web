<?php
    include('db_connect.php');
    session_start();
   
    if(!empty($_SESSION['Email'])){

        $user_check = $_SESSION['Email'];
        
        $ses_sql = mysqli_query($mysqli,"SELECT email_U, name_U FROM User WHERE email_U = '$user_check' ");
        
        $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
        
        $login_session = $row['email_U'];
        
        $login_name = $row['name_U'];
        
        if(!isset($_SESSION['Email'])){

            header("location:../login_user/login_user.views.php");
        }
   }else{
       session_destroy();
       header("location: ../login_user/login_user.views.php");
   }
?>
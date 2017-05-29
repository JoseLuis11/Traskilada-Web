<?php
    include('db_connect.php');
    session_start();
   
    if(!empty($_SESSION['id_user'])){

        $user_check = $_SESSION['id_user'];
        
        $ses_sql = mysqli_query($mysqli,"SELECT id_U FROM User WHERE id_U = '$user_check' ");
        
        $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
        
        $login_session = $row['id_U'];
        
        if(!isset($_SESSION['id_user'])){

            header("location:../login_user/login_user.views.php");
        }
   }else{
       session_destroy();
       header("location: ../login_user/login_user.views.php");
   }
?>
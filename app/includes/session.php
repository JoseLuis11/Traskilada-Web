<?php
    include('db_connect.php');
    session_start();
   
    if(!empty($_SESSION['Email'])){
            
        $user_check = $_SESSION['Email'];
        
        if($_SESSION['type'] == "user"){           
            
            $ses_sql = mysqli_query($mysqli,"SELECT email_U, name_U, id_U FROM User WHERE email_U = '$user_check' ");

                $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
                $login_session = $row['email_U'];        
                $login_name = $row['name_U'];
                $login_id = $row['id_U'];

        }else{
            $ses_sql = mysqli_query($mysqli,"SELECT email_O, name_O, id_O FROM Owner WHERE email_O = '$user_check' ");
            $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
            $login_session = $row['email_O'];        
            $login_name = $row['name_O'];
            $login_id = $row['id_O'];
        }
   }else{

       if($_SESSION['type'] == "user"){
        session_destroy();
        header("location: ../login_user/login_user.views.php");
        }else{
            session_destroy();
        header("location: ../login_owner/login_owner2.views.php");
        }
   }
?>
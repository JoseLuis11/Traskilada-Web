<?php
session_start();

//include_once "db_connect.php";

$host_db = "localhost";
$user_db = "root";
$pass_db = "expo2017";
$db_name = "traskilada";
$tbl_name = "Accounts"; 

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
    
if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
}
    
$email = $_POST['email'];
$password = $_POST['Password'];

$sql = "SELECT * FROM $tbl_name WHERE Email = '$email'";
    
$result = $conexion->query($sql);
    
    
if ($result->num_rows > 0) {     
    }
    $row = $result->fetch_array(MYSQLI_ASSOC);
    if (password_verify($password, $row['Password'])) { 
    
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
    
    header('Location: ../owner_homepage/owner_homepage.views.html');
    
    } else { 
        echo "test";
    //header('Location: ../login_owner/login_owner2.views.html');
    }
//    mysql_free_result($result);
    mysqli_close($conexion);
?>
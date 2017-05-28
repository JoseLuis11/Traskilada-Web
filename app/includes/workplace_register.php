<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "expo2017";
$db_name = "traskilada";
$tbl_users = "Users";
$tbl_accounts = "Accounts"; 

$formName = $_POST['Name'];
$formAddress = $_POST['Address'];

$mysqli = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($mysqli->connect_error){
    die("La conexion fallo: " . $mysqli->connect_error);
}
else{
    echo "Conexion con exito";
}

$result = $mysqli->query("INSERT INTO Workplaces (Name, Address, OwnerUserId) 
VALUES ('$formName','$formAddress',1) ");

$res = $mysqli->affected_rows;

if($res!=1){
        echo "No se ha insertado ningun dato";
}
else{
    mysqli_close($mysqli);

    header('Location: ../owner_homepage/owner_homepage.views.php');
    //$fila= $result->fetch_assoc();
}
?>
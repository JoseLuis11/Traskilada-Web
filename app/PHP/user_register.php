<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "expo2017";
$db_name = "traskilada";
$tbl_users = "Users";
$tbl_accounts = "Accounts"; 

$formName = $_POST['Name'];
$formLastName = $_POST['LastName'];
$formPhone = $_POST['Phone'];
$formEmail = $_POST['Email'];
$formPass = $_POST['Password'];
$formPass2 = $_POST['Password2'];
$formLoginType = $_POST['logintype'];


$mysqli = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($mysqli->connect_error){
    die("La conexion fallo: " . $mysqli->connect_error);
}
else{
    echo "Conexion con exito";
}


$result = $mysqli->query("INSERT INTO Users (Name, LastName, PhoneNumber) VALUES ('$formName','$formLastName','$formPhone') ");

$res = $mysqli->affected_rows;

if($res!=1){
        echo "No se ha insertado ningun dato";
}
else{
    echo "Fue insertado un dato";
    $fila= $result->fetch_assoc();
}



?>
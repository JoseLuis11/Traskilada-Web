<?php

include("db_connect.php");

$formName = $_POST['Name'];
$formLastName = $_POST['LastName'];
$formPhone = $_POST['Phone'];
$formEmail = $_POST['Email'];

$mysqli = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($mysqli->connect_error){
    die("La conexion fallo: " . $mysqli->connect_error);1
}
else{
    echo "Conexion con exito";
}

$result = $mysqli->query("INSERT INTO Users (Name, LastName, PhoneNumber) 
VALUES ('$formName','$formLastName','$formPhone') ");

$formLoginTypeInt=2;

$res = $mysqli->affected_rows;

if($res!=1){
        echo "No se ha insertado ningun dato";
}
else{
    echo "Fue insertado un dato";
    $userId= $mysqli->insert_id;
    $result = $mysqli->query("INSERT INTO Accounts (Email, LoginType, UserId) 
    VALUES ('$formEmail',$formLoginTypeInt,$userId) ");

    mysqli_close($mysqli);

    header('Location: ../owner_homepage/owner_homepage.views.php');
    //$fila= $result->fetch_assoc();
}
?>
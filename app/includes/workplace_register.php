<?php

include("db_connect.php");
session_start();

$formName = $_POST['Name'];
$formAddress = $_POST['Address'];
$formId = $_POST['id'];

$mysqli = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($mysqli->connect_error){
    die("La conexion fallo: " . $mysqli->connect_error);
}
else{
    echo "Conexión con exito";
}

$result = $mysqli->query("INSERT INTO Workplace (name_W,address_W, id_O)
VALUES ('$formName', '$formAddress', '$formId');");



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
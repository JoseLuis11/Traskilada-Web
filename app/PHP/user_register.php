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

if($formPass != $formPass2){
    header('Location: ../register_owner/wrongpassword.html');
}else{
    $mysqli = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($mysqli->connect_error){
    die("La conexion fallo: " . $mysqli->connect_error);
}
else{
    echo "Conexion con exito";
}


$result = $mysqli->query("INSERT INTO Users (Name, LastName, PhoneNumber) 
VALUES ('$formName','$formLastName','$formPhone') ");

if($formLoginType=="user"){
    $formLoginTypeInt=1;
}else{
    $formLoginTypeInt=2;
}


$res = $mysqli->affected_rows;

if($res!=1){
        echo "No se ha insertado ningun dato";
}
else{
    echo "Fue insertado un dato";
    //$fila= $result->fetch_assoc();
}


$userId= $mysqli->insert_id;
$result = $mysqli->query("INSERT INTO Accounts (Email, LoginType, Password, UserId) 
VALUES ('$formEmail',$formLoginTypeInt,'$formPass', $userId) ");

mysqli_close($mysqli);

header('Location: ../register_owner/registration_confirmed.views.html');

}

?>
<?php

include("../includes/db_connect.php");

$formName = $_POST['Name'];
$formLastName = $_POST['LastName'];
$formPhone = $_POST['Phone'];
$formEmail = $_POST['Email'];
$formPass = $_POST['Password'];
$formPass2 = $_POST['Password2'];
$formLoginType = $_POST['logintype'];

if($formPass != $formPass2){
    header('Location: ../register_owner/wrongpassword.html');
}

$result = $mysqli->query("SELECT Id FROM accounts WHERE Email = '$formEmail'");

$count = mysqli_num_rows($result);

if($count==1){
    //TODO: página de usuario registrado anteriormente
    echo "Email registrado anteriormente";
}else{

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
header('Location: ../register_owner/registration_confirmed.views.php');
}

mysqli_close($mysqli);


?>
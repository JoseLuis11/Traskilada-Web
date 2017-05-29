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

$result = $mysqli->query("SELECT id_U FROM User WHERE email_U = '$formEmail'");

$count = mysqli_num_rows($result);

if($count==1){
    //TODO: página de usuario registrado anteriormente
    echo "Email registrado anteriormente";
}else{

if($formLoginType=="user"){
    $result = $mysqli->query("INSERT INTO User (name_U, lastName_U, phoneNumber_U, email_U, password_U) 
    VALUES ('$formName','$formLastName','$formPhone', '$formEmail', '$formPass'); ");
}else{
    $result = $mysqli->query("INSERT INTO Owner (name_O, lastName_O, phoneNumber_O, email_O, password_O) 
    VALUES ('$formName','$formLastName','$formPhone', '$formEmail', '$formPass'); ");
}

$res = $mysqli->affected_rows;

if($res!=1){
        echo "No se ha insertado ningun dato";
}
else{
    echo "Fue insertado un dato";
    //$fila= $result->fetch_assoc();
}
mysqli_close($mysqli);
header('Location: ../register_owner/registration_confirmed.views.php');
}

?>
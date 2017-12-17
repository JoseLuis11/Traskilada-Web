<?php

include("db_connect.php");

$formName = $_POST['Name'];
$formLastName = $_POST['LastName'];
$formPhone = $_POST['Phone'];
$formEmail = $_POST['Email'];
$formWorkplace = $_POST['workplace'];
$formOwnerId = $_POST['id'];

$result = $mysqli->query("SELECT id_W
from workplace
where name_W = '$formWorkplace';");
$row=$result->fetch_array(MYSQLI_ASSOC);

$workplace_id = $row["id_W"];

$result = $mysqli->query("CALL register_employee('$formName','$formLastName','$formPhone','$formEmail', '$workplace_id', '$formOwnerId')");

/*$result = $mysqli->query("INSERT INTO Employee (name_E, lastName_E, phoneNumber_E, email_E) 
VALUES ('$formName','$formLastName','$formPhone','$formEmail') ");

$employee_Id= $mysqli->insert_id;
$result = $mysqli->query("INSERT INTO employee_workplace_owner (contractDay, id_E, id_W, id_O)
     VALUES (NOW(), '$employee_Id', '$workplace_id', '$formOwnerId')");*/

$res = $mysqli->affected_rows;


if($res!=1){
        echo "No se ha insertado ningun dato";
}
else{
    echo "Fue insertado un dato";
    
    echo $employee_Id;
    echo $workplace_id;
    echo $login_id;
    


    mysqli_close($mysqli);

    header('Location: ../owner_homepage/owner_homepage.views.php');
    //$fila= $result->fetch_assoc();
}
?>
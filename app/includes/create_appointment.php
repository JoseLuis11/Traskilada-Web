<?php

include("db_connect.php");

$formDate = $_POST['datetime'];
$formEmployeeName = $_POST['employee'];
$formService = $_POST['service'];
$formUserId = $_POST['id_U'];
$workplace = $_POST['workplace'];

$result = $mysqli->query("SELECT id_W
from workplace
where name_W = '$workplace';");
$row=$result->fetch_array(MYSQLI_ASSOC);

$workplace_id = $row["id_W"];

$result = $mysqli->query("SELECT id_E
from employee
where concat(name_E,' ', lastName_E) = '$formEmployeeName';");
$row=$result->fetch_array(MYSQLI_ASSOC);

$employee_id = $row["id_E"];

$result = $mysqli->query("SELECT id_S
from service
where concat(name_S, ' ', price) = '$formService';");
$row=$result->fetch_array(MYSQLI_ASSOC);

$service_id = $row["id_S"];

$result = $mysqli->query("INSERT INTO appointment (dateTime, id_U, id_E, id_W)
VALUES ('$formDate', '$formUserId','$employee_id','$workplace_id');");

$appointment_id= $mysqli->insert_id;
$result = $mysqli->query("INSERT INTO Service_Appointment (id_S, id_A)
VALUES('$service_id', '$appointment_id');");

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

    header('Location: ../user_views/main.php');
    //$fila= $result->fetch_assoc();
}
?>
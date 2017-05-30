<?php

    include("db_connect.php");

    $formEmployeeName = $_POST['employee'];
    $id_O = $_POST['id'];

    $result = $mysqli->query("SELECT id_E
    FROM employee
    WHERE concat(name_E,' ', lastName_E) = '$formEmployeeName';");
    $row=$result->fetch_array(MYSQLI_ASSOC);

    $employee_id = $row["id_E"];    

    $result = $mysqli->query("DELETE FROM employee_workplace_owner WHERE id_E = '$employee_id' AND id_O = '$id_O';");
    
    header('Location: ../owner_homepage/owner_homepage.views.php');

?>
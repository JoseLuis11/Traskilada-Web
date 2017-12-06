<?php

    include("db_connect.php");

    $formWorkplaceName = $_POST['workplace'];
    $id_O = $_POST['id'];

    $result = $mysqli->query("SELECT id_W
    FROM workplace
    WHERE name_W = '$formWorkplaceName';");
    $row=$result->fetch_array(MYSQLI_ASSOC);

    $workplace_id = $row["id_W"];    

    $result = $mysqli->query("DELETE FROM Workplace WHERE id_W = '$workplace_id' AND id_O = '$id_O';");
    
    echo $formWorkplaceName;
    echo $workplace_id;
    echo $id_O;

    //header('Location: ../owner_homepage/owner_homepage.views.php');

?>
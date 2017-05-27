<?php
include("../includes/db_connect.php");



$result = $mysqli->query("SELECT u.Id, u.Name, u.LastName
from accounts a, users u
where a.LoginType = 2
and a.UserId = u.Id 
order by u.Name, u.LastName;");


/*$res = $mysqli->num_rows;

    if($res!=1){
            echo "No se ha insertado ningun dato";
    }
    else{
        echo "Fue insertado un dato";
        //$fila= $result->fetch_assoc();
    }
    */
?>

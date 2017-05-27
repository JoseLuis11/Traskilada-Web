<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "expo2017";
$db_name = "traskilada";
$tbl_users = "Users";
$tbl_accounts = "Accounts"; 

$mysqli = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($mysqli->connect_error){
    die("La conexion fallo: " . $mysqli->connect_error);
}

?>
<?php
include("db_connect.php");


$result = $mysqli->query("SELECT concat(name_S, ' ', price) as Service
FROM service;");
?>
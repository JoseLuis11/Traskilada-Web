<?php
include_once 'psl-config.php';   // Ya que functions.php no está incluido.
$host_db = "localhost";
$user_db = "root";
$pass_db = "expo2017";
$db_name = "traskilada";

$mysqli = new mysqli($host_db,$user_db,$pass_db,$db_name);

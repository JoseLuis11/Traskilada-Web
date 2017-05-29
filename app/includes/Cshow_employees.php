<?php
include("../includes/db_connect.php");


$result = $mysqli->query("SELECT id_E, name_E, lastName_E, phoneNumber_E, email_E
from employee
order by name_E, lastName_E;");
?>

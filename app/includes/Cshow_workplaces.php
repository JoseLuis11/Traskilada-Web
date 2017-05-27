<?php
include("../includes/db_connect.php");



$result = $mysqli->query("SELECT w.Id, w.Name, w.Address
from workplaces w
order by w.Name;");
?>
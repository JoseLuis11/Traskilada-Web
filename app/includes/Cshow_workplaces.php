<?php
include("../includes/db_connect.php");



$result = $mysqli->query("SELECT id_W, name_W, address_W
from workplace
order by name_W, address_W;");
?>
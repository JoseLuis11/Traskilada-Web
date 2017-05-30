<?php
include("db_connect.php");



$result = $mysqli->query("SELECT w.id_W, w.name_W, w.address_W
from workplace w, owner o
WHERE o.id_O = '$login_id'
AND w.id_O = o.id_O
order by name_W, address_W;");
?>
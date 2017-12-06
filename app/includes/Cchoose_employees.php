<?php
include("db_connect.php");



$result = $mysqli->query("SELECT e.id_E as id, concat(e.name_E,' ',e.lastName_E) as name, e.phoneNumber_E as phoneNumber, e.email_E as email
FROM workplace w, employee e, owner o, Employee_Workplace_Owner ewo
WHERE e.id_E = ewo.id_E
AND o.id_O = ewo.id_O
AND w.id_O = ewo.id_O
AND w.id_W = '$workplace_id'
group by e.name_E;");
?>
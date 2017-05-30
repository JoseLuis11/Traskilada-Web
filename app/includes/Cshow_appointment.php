<?php
include("../includes/db_connect.php");

//show user appointment query
$result = $mysqli->query("SELECT DATE_FORMAT(a.dateTime,'%b %d %Y, %h:%i %p') as 'Fecha y hora', w.name_W as Local, CONCAT(e.name_E, ' ', e.lastName_E) as Empleado, s.name_S as Servicios
FROM workplace w, user u, employee e, service s, Service_Appointment sa, appointment a, owner o, Employee_Workplace_Owner ewo
WHERE s.id_S = sa.id_S
AND sa.id_A = a.id_A 
AND a.id_U = u.id_U
AND o.id_O = ewo.id_O
AND e.id_E = ewo.id_E
AND u.id_U = $login_id
AND ewo.id_W = w.id_W
group by a.dateTime
order by a.dateTime ASC");
?>
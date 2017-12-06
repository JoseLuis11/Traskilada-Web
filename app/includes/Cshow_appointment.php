<?php
include("../includes/db_connect.php");

//show user appointment query
$result = $mysqli->query("SELECT DATE_FORMAT(a.dateTime,'%b %d %Y, %h:%i %p') as 'Fecha y hora', w.name_W as Local, CONCAT(e.name_E, ' ', e.lastName_E) as Empleado, s.name_S as Servicios
FROM workplace w, user u, employee e, service s, Service_Appointment sa, appointment a, owner o, Employee_Workplace_Owner ewo
WHERE w.id_W = a.id_W
AND w.id_O = o.id_O
AND u.id_U = a.id_U
AND w.id_W = ewo.id_W
AND ewo.id_O = o.id_O
AND a.id_E = e.id_E
AND a.id_E = ewo.id_E
AND a.id_W = ewo.id_W
AND sa.id_A = a.id_A
AND s.id_S = sa.id_S
AND u.id_U = $login_id
group by a.dateTime
order by a.dateTime ASC;");
?>
<?php
include("../includes/db_connect.php");



$result = $mysqli->query("SELECT DATE_FORMAT(a.dateTime,'%b %d %Y, %h:%i %p') as 'Fecha y hora', w.name_W as Local, CONCAT(u.name_U, ' ', u.lastName_U) as Cliente, CONCAT(e.name_E, ' ', e.lastName_E) as Empleado, s.name_S as Servicios
FROM workplace w, user u, employee e, service s, Service_Appointment sa, appointment a
WHERE s.id_S = sa.id_S
AND a.id_E = e.id_E
AND a.id_W = w.id_W
AND a.id_U = u.id_U;");
?>
<?php
define('db_server', 'localhost');
define('db_name', 'traskilada');
define('db_user', 'root');
define('db_pass', 'expo2017');

$mysqli= mysql_connect(db_server,db_user,db_pass);
mysql_select_db(db_name, $mysqli);
?>
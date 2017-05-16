<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "expo2017";
$db_name = "traskilada";

$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

$email=$_POST['email'];
$password=$_POST['Password'];

$select="SELECT * FROM Accounts WHERE email='$email' and Password='$password'";
$res=mysqli_query($conexion, $select);

$filas=mysqli_num_rows($res);
if ($filas==1) {
header('Location: ../owner_homepage/owner_homepage.views.html');
}
else {
echo "ERROR EN LA AUTENTIFICACION";
}

mysqli_free_result ($res);
mysqli_close($conexion);
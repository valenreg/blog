<?php
require_once "conection.php";
$apellido=$_POST['apellido'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];

$obj = new connection();
$con = $obj->connect();
$instruccion_sql = "INSERT INTO contactos (nombre, apellido, email) 
values ('{$nombre}', '{$apellido}', '{$email}')";
$result = $con->prepare($instruccion_sql);
$result->execute();

echo "Los datos el usuario {$apellido},{$nombre} fueron procesados satisfactoriamente en el servidor";



?>
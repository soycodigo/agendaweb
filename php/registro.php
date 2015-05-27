<?php
	include_once('conexion.php');

	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];

	if(mysql_query("INSERT INTO user (nombre, correo) VALUES('$nombre','$correo')")){
		echo "insercion exitosa";
	}else{
		echo "ocurrio un error";
	}
?>
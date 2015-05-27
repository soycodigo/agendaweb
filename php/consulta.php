<?php
	include_once("conexion.php");

	$consulta = mysql_query("SELECT * FROM user");

	echo $consulta;
?>
<?php

	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "productos";


	$conexion=mysqli_connect($host,$user,$password,$database);

	if (!$conexion) {
		echo "Conexión fallida";
	}
?>
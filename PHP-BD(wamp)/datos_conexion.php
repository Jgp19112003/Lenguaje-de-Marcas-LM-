<?php
	$host="localhost";
	$port=3306;
	$socket="";
	$user="root";
	$password="admin";
	$dbname="supermercadoyproductos";
	
	$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
		or die ('No se ha podido conectar la base de datos'.$dbname. mysqli_connect_error());
	
	//$con->close();
?>
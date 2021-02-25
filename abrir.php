<?php 

	$host="localhost";
		$user="root";
		$pass="";
		$bd="oclock";
		$conn= mysqli_connect($host, $user, $pass, $bd);
		if (!$conn) {
			die("No hay conexion: ".mysqli_connect_error());
		}
?>
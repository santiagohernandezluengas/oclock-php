<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style/style.css">
	<title>..::CONSULTAR::..</title>
</head>

<body>
		<h1 class="h1">	<a href="" id="nocturno">USUARIOS</a>	</h1>
	<?php

	$inc = include("abrir.php");
	if ($inc) {
		$cons = "SELECT * FROM usuarios";
		$res = mysqli_query($conn, $cons);
		if ($res) {
			while ($row = $res->fetch_array()) {
				$CC = $row['CC'];
				$nom = $row['Nombre'];
				$ape = $row['Apellido'];
				$car = $row['Cargo'];
				$usu = $row['Usuario'];
				$con = $row['Contraseña'];

	?>
				<div class="table">
					<p class="datos">
						<span class="hover">
							<b class="b">CC: </b><span><?php echo $CC; ?></span> <br>
						</span>
						<span class="hover">
							<b class="b">Nombre: </b><span><?php echo $nom; ?></span> <br>
						</span>
						<span class="hover">
							<b class="b">Apellido: </b><span><?php echo $ape; ?></span> <br>
						</span>
						<span class="hover">
							<b class="b">Cargo: </b><span><?php echo $car; ?></span> <br>
						</span>
						<span class="hover">
							<b class="b">Usuario: </b><span><?php echo $usu; ?></span> <br>
						</span>
						<span class="hover">
							<b class="b">Contraseña: </b><span><?php echo $con; ?></span> <br>
						</span>
					</p>
				</div>
	<?php
			}
		}
	}
	?>
</body>
<script src="./js/darkMode.js"></script>

</html>
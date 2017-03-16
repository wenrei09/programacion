<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
	<?php
	$nombre= "Ramon";
	if (isset($_POST ['nombre'])) {
		$nombre=$_POST['nombre'];
	}

echo "hola". $nombre;
	?>
<form action="index.php" method="post">
	<input type="text" name="nombre" placeholder="escriba tu nombre">
	<br>
	<input type="submit" value="enviar">
	</form>
</body>
</html>
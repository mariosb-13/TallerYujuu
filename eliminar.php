<?php
require 'conexion.php';

$id = $_GET['id'];

$sql = "DELETE FROM coche WHERE id_coche=$id";

$resultado = $mysqli->query($sql);
?>
<!doctype html>
<html lang="es">

<head>
	<link rel="icon" href="imagenes/llave-inglesa.png" type="image">
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<title>Taller Yujuu</title>
</head>

<body>
	<?php

	if ($resultado > 0) {
		echo "<div class='alert alert-primary' role='alert'> Registro eliminado </div>";
	} else {
		echo "<p>Ha habido un error al eliminar el registro</p>";
	}
	echo "<a href=index.php><button type='button' class='btn btn-primary'>Regresar</button></a>";

	?>

</body>

</html>
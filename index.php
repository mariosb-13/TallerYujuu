<?php
require 'conexion.php';

$sql = "SELECT * FROM coche";

$resultado = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">

	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>

	<title>Taller Yujuu</title>

	<script>
		$(document).ready(function() {
			$('#tabla').DataTable();
		});
	</script>


</head>

<body>

	<div class="container text-center">
		<h1 class="text-center display-4">Taller Yujuu</h1>
		<hr>

		<body>
			<form method="post" action="comprobacion.php">
				<label for="matricula">Matricula:</label><br>
				<input type="text" id="matricula" name="matricula" required><br>
				<br>
				<button type="submit" class="btn btn-success">Iniciar sesion</button>
				<a href="coches.php"><button type="button" class="btn btn-primary">Registrar</button></a>
			</form>

		</body>
	</div>

</body>

</html>
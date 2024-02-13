<!DOCTYPE html>
<html lang="es">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>

	<title>Club Deportivo La Venta</title>

	<script>
		$(document).ready(function() {
			$('#tabla').DataTable();
		});
	</script>


</head>

<body>

	<div class="container">
		<h1>Taller Yujuu</h1>
		<hr>

		<body>
			<h2>Iniciar sesión</h2>
			<form method="post" action="">
				<label for="usuario">Matricula:</label><br>
				<input type="text" id="usuario" name="usuario"><br>
				<label for="contrasena">Contraseña:</label><br>
				<input type="password" id="contrasena" name="contrasena"> <br> <br>
				<input type="submit" value="Iniciar sesión">
			</form>

			<form method="post" action="registrar.php">
				<button type="submit" class="btn btn-success">Registarse</button>
			</form>

			<?php
			if (isset($error)) {
				echo "<p>$error</p>";
			}
			?>
		</body>
	</div>

</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
	<link rel="icon" href="imagenes/llave-inglesa.png" type="image">
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">

	<title>Taller Yujuu</title>
</head>

<style>
	body {
		background-image: url("imagenes/fondo.jpg");
		bac
		background-repeat: no-repeat;
		background-size: cover;

		/* Esto asegura que la imagen se ajuste al tamaño del contenedor */
	}
</style>

<body>
	<div class="container">

		<div class="row">
			<h2 class="display-4">Registrar coche</h2>
		</div>

		<div class="row">
			<div class="col-md-8">
			
				<form id="registro" name="registro" autocomplete="off" method="post" action="coches2.php">
					<div class="form-group">
						<label for="marca">Marca</label>
						<input type="text" id="marca" name="marca" class="form-control" required>
					</div>

					<div class="form-group">
						<label for="modelo">Modelo</label>
						<input type="text" id="modelo" name="modelo" class="form-control" required>
					</div>

					<div class="form-group">
						<label for="matricula">Matricula</label>
						<input type="text" id="matricula" name="matricula" class="form-control" required>
					</div>

					<div class="form-group">
						<input type="submit" class="btn btn-primary" value="Registrar coche">
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<title>Taller Yujuu</title>
</head>

<body>
	<div class="container">
		<div class="row">
			<h1>Taller Yujuu</h1>
		</div>

		<div class="row">
			<h2>Registrar</h2>
		</div>

		<div class="row">
			<div class="col-md-8">
				<!-- Completar atributos de form -->
				<form id="registro" name="registro" autocomplete="off" method="post" action="registrar2.php">
					<div class="form-group">
						<label for="nombre">Marca</label>
						<input type="text" id="nombre" name="nombre" class="form-control" required>
					</div>

					<div class="form-group">
						<label for="telefono">Modelo:</label>
						<input type="text" id="telefono" name="telefono" class="form-control" required>
					</div>

					<div class="form-group">
						<label for="fecha_nac">Matricula</label>
						<input type="date" id="fecha_nac" name="fecha_nac" class="form-control" required>
					</div>

					<div class="form-group">
						<label for="categoria">Categoria</label>
						<select name="categoria" id="categoria" class="form-control" required>
							<option value="AMATEUR">AMATEUR</option>
							<option value="PROFESIONAL">PROFESIONAL</option>
						</select>
						<input type="hidden" name="id" value="<?php echo $fila['id'] ?>">
					</div>

					<div class="form-group">
						<input type="submit" class="btn btn-primary" value="Registrar">
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>
<?php
require 'conexion.php';

$sql = "SELECT * FROM coche";

$resultado = $mysqli->query($sql);
?>

<!doctype html>
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
	<?php
	require 'conexion.php';

	$sql = "SELECT * FROM coche";

	$resultado = $mysqli->query($sql);
	?>

	<!doctype html>
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
			<div class="row">
				<h1>Socios</h1>
			</div>
			<br>

			<div class="row">
				<a href="registrar.php"><button type="button" class="btn btn-primary">Registrar</button></a>
			</div>
			<br>
			<br>

			<div class="card">
				<img class="card-img-top" src="/images/pathToYourImage.png" alt="Card image cap">
				<div class="card-body">
					<h4 class="card-title">Card title</h4>
					<p class="card-text">
						Some quick example text to build on the card title
						and make up the bulk of the card's content.
					</p>
					<a href="#!" class="btn btn-primary">Go somewhere</a>
				</div>
			</div>


		</div>
		</div>


	</body>

	</html>


</body>

</html>
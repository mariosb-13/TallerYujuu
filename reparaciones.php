<?php
require 'conexion.php';

$id=$_GET['id'];

$sql = "SELECT * FROM reparaciones where id_coche='$id' LIMIT 1";

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
		<link rel="stylesheet" href="css/jquery.dataTables.min.css">
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.4.1.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
		<script src="js/jquery.dataTables.min.js" ></script>
		
		<title>Taller Yujuu</title>
		
		<script>
			$(document).ready( function(){
				$('#tabla').DataTable();
			});
		</script>
		
		
	</head>

	<style>
	/* * {
		color:white;
	} */

	tbody{
		color:black;
	}

	th, h1{
		color: white;
	}

	body {
		background-image: url("imagenes/fondo.jpg");
		background-repeat: no-repeat;
		background-size: cover;
		/* Esto asegura que la imagen se ajuste al tamaño del contenedor */
	}
</style>

	<body>
		<div class="container">
			<div class="row">
				<h1 class="display-3">Reparaciones</h1>
			</div>
			<br>
			
			<table id="tabla" class="display" style="width:100%">
				<thead>
					<tr>
						<th>Reparación</th>
						<th>Fecha</th>
						<th>Coste</th>
					</tr>
				</thead>
				<tbody>
					<?php
					 while($fila =$resultado->fetch_assoc()){
						 echo "<tr>";
							 echo "<td>$fila[Nombre_pieza]</td>";
							 echo "<td>$fila[fecha]</td>";
							 echo "<td>$fila[coste]</td>";
							
						 echo "</tr>";
					 }
					 $mysqli->close();
					?>
				</tbody>
			</table>
			
		</div>
	</div>
	
	
</body>
</html>
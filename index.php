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
		<script src="js/jquery-3.4.1.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
		<script src="js/jquery.dataTables.min.js" ></script>
		
		<title>Club Deportivo La Venta</title>
		
		<script>
			$(document).ready( function(){
				$('#tabla').DataTable();
			});
		</script>
		
		
	</head>
	<body>
		<div class="container">
			<div class="row">
				<h1>Taller Yujuu</h1>
			</div>
			<br>
			
			<div class="row">
			<a href="registrar.php"><button type="button" class="btn btn-primary">Registrar</button></a>
			</div>
			<br>
			<br>
			
			<table id="tabla" class="display" style="width:100%">
				<thead>
					<tr>
						<th>Matricula</th>
						<th>Marca</th>
						<th>Modelo</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
					 while($fila =$resultado->fetch_assoc()){
						 echo "<tr>";
							 echo "<td>$fila[matricula]</td>";
							 echo "<td>$fila[marca]</td>";
							 echo "<td>$fila[modelo]</td>";
							
							 echo"<td><a href='reparaciones.php?id=$fila[id_coche]' class='btn btn-info'>Reparaciones</a></td>";
							 echo"<td><a href='eliminar.php?id=$fila[id_coche]' class='btn btn-danger'>Eliminar</a></td>";
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
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

	<style>
		
	body {
		background-image: url("imagenes/fondo.jpg");
		background-repeat: no-repeat;
		background-size: cover;
		/* Esto asegura que la imagen se ajuste al tamaño del contenedor */
	}
</style>
	<body>
		<?php
			
			$matricula=$_POST['matricula'];
			$marca=$_POST['marca'];
			$modelo=$_POST['modelo'];
			   
			require 'conexion.php';

			$sql="INSERT INTO coche (matricula,marca,modelo) VALUES ('$matricula','$marca','$modelo')";

			$resultado = $mysqli->query($sql);

			if($resultado>0){
				echo "<div class='alert alert-primary' role='alert'> Coche agregado correctamente</div>";
			}else{
				echo "<p>Ha habido un error al agregar el coche</p>";	
			}
			echo "<a href=index.php><button type='button' class='btn btn-primary'>Regresar</button></a>";
			  
			
		?>

	</body>
</html>
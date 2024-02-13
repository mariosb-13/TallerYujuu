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

    <?php
        if(!isset($_POST["matricula"])){
            header("Location: coches.php");
        } else {
            $matricula = $_POST["matricula"];
            require 'reparaciones.php';
            $sql = "SELECT * FROM provincias WHERE id_comunidad = $id_comunidad ORDER BY nombre";
            $resultado = $mysqli->query($sql);
        }
    ?>

	<div class="container">
		<div class="row">
			<h1>Taller Yujuu</h1>
		</div>

		<div class="row">
			<h2>Reparaciones</h2>
		</div>

		<div class="row">
			<div class="col-md-8">
			
				<form id="registro" name="registro" autocomplete="off" method="post" action="reparaciones.php">

                <div class="form-group">
                            <!-- Categoría -->
                            <label for="categoria">Categoría</label>
                            <select name="categoria" id="categoria" class="form-control" required>
                                <option value="amateur">AMATEUR</option>
                                <option value="profesional">PROFESIONAL</option>
                            </select>
                        </div>

                    <div class="form-group">
                            <label for="categoria">Categoría</label>
                            <select name="categoria" id="categoria" class="form-control" required>
                                <option value="amateur">AMATEUR</option>
                                <option value="profesional">PROFESIONAL</option>
                            </select>
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
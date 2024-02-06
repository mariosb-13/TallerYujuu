<?php
	require 'conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talleres Yuju</title>
</head>
<body>
    <h1> Registrar Coche, $matrcicula </h1>
    <hr><hr>
    <form action="" method="post">
            Matrícula: <input type="text" id="matricula" name="matricula"><br>
            Marca: <input type="text" id="marca" name="marca"><br>
            Modelo: <input type="text" id="modelo" name="modelo"><br>
            Año: <input type="number" id="año" name="año"><br>
            Color: <input type="color" id="color" name="color"><br>
    </form>
</body>
</html>
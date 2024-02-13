<?php
require 'conexion.php';
?>
<!doctype html>
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

    $matricula = $_POST['matricula'];

    $sql = "SELECT * FROM coche WHERE matricula LIKE '$matricula'";
    $resultado = $mysqli->query($sql);

    if ($resultado>0) {
        header("Location: reparaciones.php");
    } else {
        header("Location: coches.php");
    }
    ?>
</body>

</html>
<!doctype html>
<html lang="es">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
      
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <title> Registrar coche </title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1>Socios</h1>
            </div>
            
            <div class="row">
                <div class="col-md-8">
                
                    <form action="coches2.php" id="registro" name="registro" autocomplete="off" method="post">
                        <div class="form-group">
                      
                            <label for="matricula"> Matrícula </label>
                            <input type="number" name="matricula" id="matricula" class="form-control" placeholder="Introduce la matricula" required>
                        </div>
                        
                        <div class="form-group">
                           
                            <label for="marca">Marca</label>
                            <input type="text" name="marca" id="marca" class="form-control" placeholder="Introduce la marca" required>
                        </div>
                        
                        <div class="form-group">
                            
                            <label for="modelo">Modelo</label>
                            <input type="text" name="modelo" id="modelo" class="form-control" placeholder="Introduce el modelo" required>
                        </div>
                        
                        <div class="form-group">
                            <!-- Registrar -->
                            <input type="submit" value="Registrar" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <script src="js/jquery-3.4.1.min.js" ></script>
        <script src="js/bootstrap.min.js" ></script>
    </body>
</html>
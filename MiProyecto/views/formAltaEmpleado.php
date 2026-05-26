<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        .ancho{
            width: 50%;
            margin: auto;
        }
        body{
            margin-top: 30px;
        }
    </style>
    <title>Registros Empleado</title>
</head>
<body>
    <div class="container" ancho>

        <h2>Alta Empleado</h2>
        <hr>

        <form action="" method="post">
            <div class="mb-3">
                <label class="control-label" for="nombre">Nombre</label>
                <input type="text" name="nombre" id="" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="control-label" for="apaterno">Apellido Paterno</label>
                <input type="text" name="apaterno" id="" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="control-label" for="direccion">Direccion</label>
                <input type="text" name="direccion" id="" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="control-label" for="telefono">Telefono</label>
                <input type="text" name="telefono" id="" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="control-label" for="correo">Correo</label>
                <input type="mail" name="correo" id="" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="control-label" for="nombre">Nombre</label>
                <input type="text" name="" id="" class="form-control" required>
            </div>
            <?php 
                include '../class/database.php';
                $conexion=new Database();
                $conexion->conectarDB();

                $consulta="select idDepa,nombreDepa FROM departamento";
                $reg = $conexion->seleccionar($consulta);

                echo "
                <div class='mb-3'>
                <label class='control-label'>Departamento</label>
                <select name='depa' class='form-select'>";

                    foreach($reg as $value){
                        echo "<option value='".$value->idDepa."'>".
                        $value->nombreDepa."</option>";
                    }

                echo "
                </select>
                </div>";
                $conexion->desconectarDB();
            ?>
            
            <br>
            
            <div class='d-grid gab-2'>
                <button class="btn btn-primary btn-lg">Guardar</button>
            </div>

        </form>

        

    </div>
</body>
</html>
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
    <title>Buscar Empleado</title>
</head>
<body>

    <h1 align="center">Buscar Empleados por nombre</h1>
    <br>
    <div class="container ancho">
        <form action="" method="post">
        <div class="mb-3">
            <label class="control-label" for="nombre">Nombre</label>
            <input type="text" name="nombre" id="" class="form-control" required>
        </div>
        <div class='d-grid gab-2'>
            <button class="btn btn-primary btn-lg">Buscar</button>
        </div>
        <br>
        </form>
    </div>
    <div class="container">
        <h2 align="center">Empleados Encontrados</h1>
        <br>
        <?php
        include '../class/Database.php';
        $nombre=$_POST['nombre'] ?? ''; 
        $conexion=new Database();
        $conexion->conectarDB();
        $constulta="SELECT e.* , d.nombreDepa FROM empleado e JOIN departamento d ON e.depaFK = d.idDepa WHERE e.nombre LIKE '%$nombre%'";
        $tabla=$conexion->Seleccionar($constulta);

        echo "
        <table class='table table-hover'>
        <thead class ='table-dark'>
            <tr>
                <th>idEmp</th>
                <th>nombre</th>
                <th>apat</th>
                <th>amat</th>
                <th>direccion</th>
                <th>telefono</th>
                <th>correo</th>
                <th>nombreDepa</th>
            </tr>
        </thead>
        <tbody>";

        foreach($tabla as $reg)
        {
            echo "<tr>";
            echo "<td> $reg->idEmp</td>";
            echo "<td> $reg->nombre</td>";
            echo "<td> $reg->apat</td>";
            echo "<td> $reg->amat</td>";
            echo "<td> $reg->direccion</td>";
            echo "<td> $reg->telefono</td>";
            echo "<td> $reg->correo</td>";
            echo "<td> $reg->nombreDepa</td>";
        }
        echo "</tbody>
        </table>";
        $conexion->DesconectarDB();
        ?>
    </div>

</body>
</html>
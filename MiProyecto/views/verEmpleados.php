<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Empleados</title>
</head>
<body>
    <div class="container">
        <h1 align="center">Empleados</h1>
        <?php
        include '/opt/lampp/htdocs/database.php';
        $conexion=new Database();
        $conexion->conectarDB();
        $constulta="SELECT e.*, d.nombreDepart FROM empleado e JOIN departamento d ON e.depaFK = d.idDepart";
        $tabla=$conexion->Seleccionar($constulta);

        echo "
        <table class='table table-hover'>
        <thead class ='table-dark'>
            <tr>
                <th>idEmpleado</th>
                <th>nombre</th>
                <th>apPaterno</th>
                <th>apMaterno</th>
                <th>direccion</th>
                <th>telefono</th>
                <th>correo</th>
                <th>nombreDepart</th>
            </tr>
        </thead>
        <tbody>";

        foreach($tabla as $reg)
        {
            echo "<tr>";
            echo "<td> $reg->idEmpleado</td>";
            echo "<td> $reg->nombre</td>";
            echo "<td> $reg->apPaterno</td>";
            echo "<td> $reg->apMaterno</td>";
            echo "<td> $reg->direccion</td>";
            echo "<td> $reg->telefono</td>";
            echo "<td> $reg->correo</td>";
            echo "<td> $reg->nombreDepart</td>";
        }
        echo "</tbody>
        </table>";
        $conexion->DesconectarDB();
        ?>
    </div>
</body>
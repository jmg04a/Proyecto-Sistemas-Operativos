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
        <br>
        <?php
        include '../class/Database.php';
        $conexion=new Database();
        $conexion->conectarDB();
        $constulta="SELECT e.*, d.nombreDepa FROM empleado e JOIN departamento d ON e.depaFK = d.idDepa";
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
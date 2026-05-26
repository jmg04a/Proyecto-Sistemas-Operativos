<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Departamentos</title>
</head>
<body>
    <div class="container">
        <h1 align="center">departamento</h1>
        <?php
        include '/opt/lampp/htdocs/database.php';
        $conexion=new Database();
        $conexion->conectarDB();
        $constulta="SELECT * FROM departamento";
        $tabla=$conexion->Seleccionar($constulta);

        echo "
        <table class='table table-hover'>
        <thead class ='table-dark'>
            <tr>
                <th>idDepart</th>
                <th>nombreDepart</th>
                <th>fechaCreacion</th>
            </tr>
        </thead>
        <tbody>";

        foreach($tabla as $reg)
        {
            echo "<tr>";
            echo "<td> $reg->idDepart</td>";
            echo "<td> $reg->nombreDepart</td>";
            echo "<td> $reg->fechaCreacion</td>";
            echo "</tr>";
        }
        echo "</tbody>
        </table>";
        $conexion->DesconectarDB();
        ?>
    </div>
</body>
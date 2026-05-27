<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Departamento</title>
</head>
<body>
    <div class="container">
        <?php
        
            include '../class/Database.php';
            $db = new Database();
            $db->conectarDB();
            extract($_POST);

            $query = "INSERT INTO departamento(nombreDepa,fechaCreacion)
             VALUES ('$nombre','$fecha')";
            
            $db->ejecutar($query);
            
            echo "
            <div class='alert alert-success'>
            Departamento Registrado
            </div>
            ";
            header("refresh:3; ../index.php");
        ?>
    </div>
</body>
</html>
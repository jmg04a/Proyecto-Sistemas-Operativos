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
    <title>Registros Departamento</title>
</head>
<body>
    <div class="container ancho">

        <h2>Alta Departamento</h2>
        <hr>
        <form action="../scripts/guardaDepa.php" method="post">
            <div class="mb-3">
                <label class="control-label" for="nombre">Nombre</label>
                <input type="text" name="nombre" id="" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="control-label" for="fecha">Fecha</label>
                <input type="date" name="fecha" id="" class="form-control" required>
            </div>
            <br>
            <div class='d-grid gab-2'>
                <button class="btn btn-primary btn-lg">Guardar</button>
            </div>
        </form>
    </div>
</body>
</html>
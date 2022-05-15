<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Materia</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h1 id="titulo_principal" class="text-center">Registrar Materia</h1>
    <div class="col-sm-4 offset-sm-4">
        <br>
        <form action="guardar_materia.php" method="post">

            <!--<input type="hidden" name="">-->


            
            <div class="mb-3">
                <th><b><label for="">Nombre:</label></b></th>
                <th><input class="form-control" type="text" name="nombre" id=""></th>
            </div>

            <div class="mb-3">
                <th><b><label for="">Horas_Catedras:</label></b></th>
                <th><input class="form-control" type="int" name="Horas_Catedras" id=""></th>

                <div class="mb-3">
                    <th><b><label for="">Docente_id:</label></b></th>
                    <th>
                    <th><input class="form-control" type="int" name="Docente_id" id=""></th>
                </div>

                <input type="hidden" name="editar" id="" value='no' readonly>
                <input class="btn btn-outline-primary" type="submit" value="GUARDAR">
        </form>
    </div>

    <link rel="stylesheet" href="./css/index.css">
</body>

</html>
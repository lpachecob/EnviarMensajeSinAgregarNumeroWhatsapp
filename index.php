<?php
if (!empty($_POST)) {

    $codigoPais = $_POST['codigoPais'];
    $numeroTelefono = $_POST['numeroTelefono'];
    header("Location: http://wa.me/$codigoPais$numeroTelefono");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <style>
        html,
        body {
            height: 100%
        }
    </style>

    <title>Enviar mensaje</title>
</head>

<body>
    <div class="h-100 row align-items-center container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h3>
                    Ingresa el codigo de pais y el número de telefono
                </h3>
            </div>
            <div class="col-md-6">
                <form role="form" method="POST">
                    <div class=" form-group">

                        <label for="codigoPais">
                            Código de país
                        </label>
                        <input type="number" class="form-control" name="codigoPais" />
                    </div>
                    <div class="form-group">

                        <label for="exampleInputPassword1">
                            Número de telefono
                        </label>
                        <input type="number" class="form-control" name="numeroTelefono" />
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">
                        Ir a mensajes
                    </button>

                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>LARAVEL - POO</title>
</head>

<body>
    <div class="container">

        <br>
        <br>

        <form class="row" method="post" action="{{ route('setHora')}}">
            <div class="col-md-4">
                <label for="hora" class="form-label">Hora</label>
                <input type="number" class="form-control" id="hora">
            </div>
            <div class="col-md-4">
                <label for="minutos" class="form-label">Minuto</label>
                <input type="number" class="form-control" id="minutos">
            </div>
            <div class="col-md-4">
                <label for="segundos" class="form-label">Segundo</label>
                    <input type="number" class="form-control" id="segundos">
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Guardar</button>
            </div>
        </form>

    </div>
</body>

</html>

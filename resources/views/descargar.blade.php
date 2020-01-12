<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ asset('css/descargar.css') }}" rel="stylesheet">
</head>
<body>


{{--    <table class="ui celled table">--}}
{{--        <thead>--}}
{{--            <tr>--}}
{{--                <th>Pregunta</th>--}}
{{--                <th>Recomendacion</th>--}}
{{--                <th>Media</th>--}}
{{--            </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--            @foreach($f as $indicador)--}}
{{--                <tr>--}}
{{--                    <td data-label="Name">{{$indicador->pregunta->pregunta}}</td>--}}
{{--                    <td data-label="Age">{{$indicador->indicador->indicador}}</td>--}}
{{--                    <td data-label="Job">{{$indicador->media}}</td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--        </tbody>--}}
{{--    </table>--}}



    <div class="contenedor">
        <div class="columna">
            <p class="titulo">Departamento</p>
            <p class="descripcion">{{$departamento}}</p>
        </div>

        <div class="columna">
            <p class="titulo">Encuesta</p>
            <p class="descripcion">{{$encuesta}}</p>
        </div>

        <div class="columna">
            <p class="titulo">Media</p>
            <p class="descripcion">{{$media_encuesta}}</p>
        </div>

    </div>


    <div class="asd">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Pregunta</th>
                    <th scope="col">Recomendacion</th>
                    <th scope="col">Media</th>
                </tr>
            </thead>
            <tbody>
                @foreach($f as $indicador)
                    <tr>
                        <th scope="row">{{$indicador->pregunta->pregunta}}.</th>
                        <td>{{$indicador->indicador->indicador}}</td>
                        <td>{{$indicador->media}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="{{ asset('js/descargar.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Bem-Vindo!</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('') }}">Pandô Automóveis</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('') }}">Ver Todos os Carros</a></li>
            <li><a href="{{ URL::to('create') }}">Adicionar carro</a>
            </ul>
        </nav>
        <div class="container">

            <h1>Todos os carros cadastrados</h1>

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Marca</td>
                        <td>Modelo</td>
                        <td>Ano</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($carros as $key => $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->marca }}</td>
                        <td>{{ $value->modelo }}</td>
                        <td>{{ $value->ano }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </body>
    </html>
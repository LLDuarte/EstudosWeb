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
            <li><a href="{{ URL::to('show') }}">Ver Todos os Carros</a></li>
            <li><a href="{{ URL::to('create') }}">Adicionar carro</a>
            </ul>
        </nav>
        <div class="container">
            <center>
                <h1>Bem-vindo à Pandô Automóveis!</h1>
                <h4>Também fazemos <a href="https://www.pandoapps.com.br/">aplicativos!</a></h4>
            </center>
        </div>
    </body>
    </html>
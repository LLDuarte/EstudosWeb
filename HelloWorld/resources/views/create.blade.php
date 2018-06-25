<!DOCTYPE html>
<html>
<head>
    <title>Adicionando novo carro!</title>
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

            <div style="margin: auto; width: 600px;">

                <h1>Adicionar novo carro</h1>
                {{ Form::open(array('url' => '/')) }}

                <div class="form-group">
                    {{ Form::label('marca', 'Marca') }}
                    {{ Form::text('marca', Input::old('marca'), array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('modelo', 'Modelo') }}
                    {{ Form::text('modelo', Input::old('modelo'), array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('ano', 'Ano') }}
                    {{ Form::text('ano', Input::old('ano'), array('class' => 'form-control')) }}
                </div>

                <center>{{ Form::submit('Adicionar carro', array('class' => 'btn btn-primary')) }}</center>

                {{ Form::close() }}
            </div>

        </div>
    </body>
    </html>
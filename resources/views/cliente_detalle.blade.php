<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles Cliente</title>
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ url('js/booststrap.bundble-min.js')}}"></script>
</head>
<body>
    <div class="container">
        <h3>Detalles Cliente</h3>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $cliente->nombre }}</h5>
                <h5 class="card-title">{{ $cliente->email }}</h5>
                <h5 class="card-title">{{ $cliente->telefono }}</h5>
                <h5 class="card-title">{{ $cliente->direccion }}</h5>
                <p class="card-text">Fecha de Nacimiento: {{ $cliente->fn }}</p>
                <img src="{{ url('img/'.$cliente->foto) }}" class="card-img-bottom" style="width: 100px; height: 100px;">
                <a href="{{ route('clientes') }}" class="btn btn-secondary">Volver a la Lista</a>
            </div>
        </div>
    </div>
</body>
</html>
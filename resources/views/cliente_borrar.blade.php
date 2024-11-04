<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminación</title>
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h3>Eliminación</h3>
        <form action="{{ route('cliente_borrar', $cliente->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
            <a href="{{ route('clientes') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
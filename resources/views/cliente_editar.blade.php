<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ url('js/bootstrap.bundle.js') }}"></script>
</head>
<body>
    <div class="container">
        <h3>Editar Cliente</h3>
        <form action="{{ route('cliente_salvar', $cliente->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="{{ $cliente->nombre }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $cliente->email }}" required>
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="text" class="form-control" name="telefono" value="{{ $cliente->telefono }}" required>
            </div>
            <div class="form-group">
                <label for="direccion">Direccion</label>
                <input type="text" class="form-control" name="direccion" value="{{ $cliente->direccion }}" required>
            </div>
            <div class="form-group">
                <label for="fn">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="fn" value="{{ $cliente->fn }}" required>
            </div>
            <div class="form-group">
                <label for="foto1">Nueva Foto</label>
                <input type="file" class="form-control" name="foto1" accept="image/*">
                <input type="hidden" name="foto2" value="{{ $cliente->foto }}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('empleados') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>

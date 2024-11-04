<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Clientes</title>
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
</head>
<body>
<br><br><br>
    <div class="container">
        <h3>Lista de Clientes</h3>
        <h5>CRUD: Clientes</h5>
        <hr>
        <p style="text-align: right">
            <a href="{{ route('cliente_alta') }}">
                <button type="button" class="btn btn-primary btn-sm">Registro Cliente</button>
            </a>
        </p>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>N°</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>F.N</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                <tr>
                    <td><img src="{{ url('img/'.$cliente->foto) }}" style="width: 30px; height: 30px;"></td>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->telefono }}</td>
                    <td>{{ $cliente->direccion }}</td>
                    <td>{{ $cliente->fn }}</td>
                    <td>
                        <a href="{{ route('cliente_detalle', $cliente->id) }}">
                            <button type="button" class="btn btn-outline-success btn-sm">Detalle</button>
                        </a>
                        <a href="{{ route('cliente_editar', $cliente->id) }}">
                            <button type="button" class="btn btn-outline-info btn-sm">Actualizar</button>
                        </a>
                        <a href="{{ route('cliente_borrar', $cliente->id) }}">
                            <button type="button" class="btn btn-outline-danger btn-sm">Eliminar</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
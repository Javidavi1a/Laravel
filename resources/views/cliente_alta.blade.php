<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name=" viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ url('css/bootstrap.min.css')}}" rel="stylesheet">

    <script src="{{ url('js/bootstrap.bundle.min.js') }}"  crossorigin=" anonymous" ></script>

</head>
<body>
    <div class="container">
        <h3>Registro Cliente</h3>
        <h5> CRUD: Cliente -> Registro</h5>
        <hr>
        <br>
        <form action="{{route('cliente_registrar') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h3>Datos personales</h3>

            <div class="form-floating mb-3">
                <input type="input" class="form-control" name="nombre" value="{{ old('nombre') }}" id="floatingNombre"
                    placeholder="ejemplo: Juan Gomez" aria-describedby="NombreHelp">
                <label for ="floatingNombre">Nombre</label>
                <div id="NombreHelp" class="form-text">@if($errors->first('nombre')) <i>EL campo Nombre (s ) no es correcto!!!</i> @endif</div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" required>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" class="form-control" name="telefono" required>
            </div>

            <div class="mb-3">
                <label for="direccion" class="form-label">Direccion</label>
                <input type="text" class="form-control" name="direccion" required>
            </div>

            <div class=" form-floating mb-3">
                <input type="date" class="form-control" name="fn" value="{{ old(' fn') }}" id="floatingfn" placeholder="ejemplo: 15/03/1981"
                    aria-describedby="fnHelp">
                <label for="floatingfn">Fecha de Nacimiento</label>
                <div id="fnHelp" class="form-text"> Coloque su Fecha de Nacimiento (<i> Formato </i>: dia/mes/año )</div>
            </div>

            <div class=" form-floating mb-3">
                <input type="file" class="form-control" name="foto" id="floatingfoto" placeholder="- - - -" aria-describedby="fotoHelp">
                <label for="floatingfoto" > Foto</label>
                <div id="fotoHelp" class="form-text"> Busque una Imagen para su perfil (<i>Formatos</i>: jpg/png/bmp)</div>
            </div>

            <hr><br>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('clientes') }}">
                <button type="button" class="btn btn-danger">Cancelar</button>
            </a>
        </form>
        <br><br><br>
    </div>
</body>
</html>
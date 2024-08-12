<!DOCTYPE html>
<html>
<head>
    <title>Listado de Libros</title>
</head>
<body>
    <h1>Listado de Libros</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Precio</th>
                <th>Año</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
                <tr>
                    <td>{{ $libro->id }}</td>
                    <td>{{ $libro->titulo }}</td>
                    <td>{{ $libro->autor }}</td>
                    <td>{{ $libro->precio }}</td>
                    <td>{{ $libro->anyo }}</td>
                    <td>{{ $libro->stock }}</td>
                    <td>
                        <a href="{{ route('show', $libro->id) }}">Ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('welcome') }}">Volver a Inicio</a>

</body>
</html>

<!-- resources/views/libros/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Libro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        table th {
            background-color: #f4f4f4;
        }

        .button, .button-submit {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            margin: 5px;
            border: none;
            cursor: pointer;
        }

        .button:hover, .button-submit:hover {
            background-color: #45a049;
        }

        .button-secondary {
            background-color: #007bff;
        }

        .button-secondary:hover {
            background-color: #0056b3;
        }

        .form-container {
            margin-top: 20px;
        }

        form label {
            display: block;
            margin: 10px 0 5px;
        }

        form input[type="number"] {
            padding: 5px;
            font-size: 16px;
            width: 100px;
        }

        form button {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <p>ID: {{ $libro->id }}</p>
    <p>Título: {{ $libro->titulo }}</p>
    <p>Autor: {{ $libro->autor }}</p>
    <p>Precio: {{ $libro->precio }}</p>
    <p>Año: {{ $libro->anyo }}</p>
    <p>Stock: {{ $libro->stock }}</p>
    <a href="{{ route('index') }}" class="button">Volver a la lista de libros</a>

    <!-- Mensajes de éxito o error -->
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    @if (session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    <!-- Botón para comprar -->
    <a href="{{ route('formulario', $libro->id) }}" class="button button-secondary">Comprar</a>

</body>
</html>


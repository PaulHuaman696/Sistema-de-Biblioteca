<!DOCTYPE html>
<html>
<head>
    <title>Comprar Libro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
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
    <h1>Comprar Libro</h1>

    <!-- Mensajes de éxito o error -->
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    @if (session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    <h2>Detalles del Libro</h2>
    <p>ID: {{ $libro->id }}</p>
    <p>Título: {{ $libro->titulo }}</p>
    <p>Autor: {{ $libro->autor }}</p>
    <p>Precio: {{ $libro->precio }}</p>
    <p>Año: {{ $libro->anyo }}</p>
    <p>Stock disponible: {{ $libro->stock }}</p>

    <!-- Formulario para comprar -->
    <form action="{{ route('libro', $libro->id) }}" method="POST">
        @csrf
        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" min="1" max="{{ $libro->stock }}" value="1" required>
        <button type="submit">Comprar</button>
    </form>

    <a href="{{ route('show', $libro->id) }}" class="button">Volver a los detalles del libro</a>
</body>
</html>

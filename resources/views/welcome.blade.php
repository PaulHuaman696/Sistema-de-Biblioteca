<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }

        .button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            margin: 10px;
            border: none;
            cursor: pointer;
        }

        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Bienvenido al Sistema de Biblioteca</h1>

    <!-- Botones para redirigir a otras vistas -->
    <div>
        <!--<a href="\{\{ route('create') }}" class="button">Crear Libro</a>-->
        <a href="{{ route('index') }}" class="button">Consultar Libros</a>
        <!--<a href="\{\{ route('stock') }}" class="button">Aumentar Stock</a>-->
        <a href="{{ route('formulario', 1) }}" class="button">Comprar Libro</a>
    </div>
</body>
</html>
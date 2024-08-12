<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud de Préstamo de Libro</title>
    <link rel="stylesheet" href="..\css\app.css">
</head>
<body>
    <h2>Solicitud de Préstamo de Libro</h2>
    <form action="procesar_formulario.php" method="post">
        <div class="form-group">
            <label for="libro">Libro:</label>
            <input type="text" id="libro" name="libro" required>
        </div>
        <div class="form-group">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>
        </div>
        <div class="form-group">
            <label for="dias_prestamo">Días de préstamo (máximo 5):</label>
            <input type="number" id="dias_prestamo" name="dias_prestamo" min="1" max="5" required>
        </div>
        <div class="form-group">
            <label for="telefono">Número de teléfono:</label>
            <input type="text" id="telefono" name="telefono" required>
        </div>
        <div class="form-group">
            <label for="correo">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" required>
        </div>
        <input type="submit" value="Solicitar Préstamo">
    </form>

    <h2>Configuración de Préstamo de Libro</h2>
    <ul>
        <li>Nombre de la biblioteca: {{ $data->name_biblioteca }}</li>
        <li>Ubicación: {{ $data->ubicacion }}</li>
        <li>Horario:</li>
        <ul>
            <li>Lunes a Viernes: {{ $data->horario->lunes_viernes }}</li>
            <li>Sábado: {{ $data->horario->sabado }}</li>
            <li>Domingo: {{ $data->horario->domingo }}</li>
        </ul>
        <li>Base de datos: {{ $data->dbname }}</li>
        <li>Host: {{ $data->host }}</li>
        <li>Usuario: {{ $data->usuario }}</li>
        <li>Máximo días de préstamo: {{ $data->max_dias_prestamo }}</li>
        <li>Multa por día: ${{ $data->multaXdia }}</li>
        <li>Notificar por correo a: {{ $data->notificarXcorreo }}</li>
        <li>Notificar por teléfono a: {{ $data->notificarXtelefono }}</li>
    </ul>
</body>
</html>
<?php
    
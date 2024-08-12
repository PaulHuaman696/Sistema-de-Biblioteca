<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadJsonController extends Controller
{
    public function index(){
        // Leer el archivo JSON
        $json_data = file_get_contents('parametros_config.json');

        // Decodificar el JSON para acceder a sus datos
        $data = json_decode($json_data);

        // Acceder a los datos
        return "Nombre de la biblioteca: " . $data->name_biblioteca . "<br>";
        echo "Ubicación: " . $data->ubicacion . "<br>";
        echo "Horario:<br>";
        echo "- Lunes a Viernes: " . $data->horario->lunes_viernes . "<br>";
        echo "- Sábado: " . $data->horario->sabado . "<br>";
        echo "- Domingo: " . $data->horario->domingo . "<br>";
        echo "Nombre de la base de datos: " . $data->dbname . "<br>";
        echo "Host: " . $data->host . "<br>";
        echo "Usuario: " . $data->usuario . "<br>";
        echo "Máximo días de préstamo: " . $data->max_dias_prestamo . "<br>";
        echo "Multa por día: $" . $data->multaXdia . "<br>";
        echo "Notificar por correo a: " . $data->notificarXcorreo . "<br>";
        echo "Notificar por teléfono a: " . $data->notificarXtelefono . "<br>";
        
    }    
}

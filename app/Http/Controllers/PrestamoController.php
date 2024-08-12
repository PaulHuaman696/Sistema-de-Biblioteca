<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestamo;

class PrestamoController extends Controller
{
    // Listar prestamos
    public function index(){
        $prestamos = Prestamo::with('prestamo')->get();
        return $prestamos;
    }

    // Ver un prestamo
    public function show($id){
        $prestamo = Prestamo::find($id);
        if (is_null($prestamo)) {
            return 'El prestamo buscado no existe.';
        }
        return $prestamo;
    }

    // Crear un prestamo
    public function store(Request $request){
        $params = $request->all();
        $prestamo = Prestamo::create([
            'usuario_id' => $params['usuario_id'],
            'libro_id' => $params['libro_id'],
            'dia' => $params['dia']
        ]);
        return $prestamo;
    }

    // Eliminar prestamo
    public function destroy($id){
        $prestamo = Prestamo::find($id)->delete();

        if ($prestamo){
            return 'Prestamo eleminado.';
        }else{
            return 'No se pudo eliminar.';
        }
    }

    // Actualizar prestamo
    public  function update ($id,Request $request){
        $params = $request->all();
        $prestamo = Prestamo::find($id)->update([
            'titulo' => $params['titulo'],
            'precio' => $params['precio'],
            'anyo' => $params['anyo']
        ]);
        return $prestamo ? 'El prestamo fue actualizado ' : 'no se pudo';
    }

    public function leerArchivoJson()
    {
        // Ruta al archivo JSON
        $rutafileJson = storage_path('parametros_config.json');

        // Verificar si el archivo existe
        if (file_exists($rutafileJson)) {
            // Leer el contenido del archivo JSON
            $json_data = file_get_contents($rutafileJson);

            // Decodificar el JSON a un array o objeto
            $data = json_decode($json_data);

            // Devolver los datos decodificados 
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Archivo JSON no encontrado'], 404);
        }
    }

    public function mostrarConfiguracion()
    {
        $rutaArchivoJson = public_path('parametros_config.json');

        // Verificar si el archivo existe
        if (file_exists($rutaArchivoJson)) {
            // Leer el contenido del archivo JSON
            $json_data = file_get_contents($rutaArchivoJson);

            // Decodificar el JSON a un array o un objeto
            $data = json_decode($json_data);

            // Devolver una vista que muestre los datos del JSON
            return view('configuracion', ['data' => $data]);
        } else {
            return response()->json(['error' => 'Archivo JSON no encontrado'], 404);
        }
    }
}

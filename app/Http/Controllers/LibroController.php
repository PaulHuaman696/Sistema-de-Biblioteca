<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\LibroAutor;

class LibroController extends Controller
{
    // Listar Libros
    public function index(){
        $libros = Libro::get();
        return $libros;
    }

    // Ver un libro
    public function show($id){
        $libro = Libro::find($id);
        if (is_null($libro)) {
            return 'El libro buscado no existe.';
        }
        return $libro;
    }

    // Crear un libro
    public function store(Request $request){
        $params = $request->all();
        $libro = Libro::create([
            'titulo' => $params['titulo'],
            'autor' => $params['autor'],
            'precio' => $params['precio'],
            'anyo' => $params['anyo'],
            'stock' => $params['stock']
        ]);
        return $libro;
    }

    // Eliminar libro
    public function destroy($id){
        $libro = Libro::find($id)->delete();

        if ($libro){
            return 'Libro eleminado.';
        }else{
            return 'No se pudo eliminar.';
        }
    }

    // Actualizar libro
    public  function update ($id,Request $request){
        $params = $request->all();
        $libro = Libro::find($id)->update([
            'titulo' => $params['titulo'],
            'precio' => $params['precio'],
            'anyo' => $params['anyo'],
            'stock' => $params['stock']
        ]);
        return $libro ? 'El libro fue actualizado ' : 'no se pudo';
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class ConsultarController extends Controller
{
    public function listarLibros()
    {
        $libros = Libro::all();
        return view('index', ['libros' => $libros]);
    }

    public function verLibro($id)
    {
        $libro = Libro::find($id);
        if (is_null($libro)) {
            return redirect()->route('index')->with('error', 'El libro buscado no existe.');
        }
        return view('show', ['libro' => $libro]);
    }
}





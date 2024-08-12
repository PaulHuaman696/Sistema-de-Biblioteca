<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class ComprarController extends Controller
{
    public function mostrarFormulario($id)
    {
        $libro = Libro::find($id);

        if (is_null($libro)) {
            return redirect()->route('index')->with('error', 'El libro buscado no existe.');
        }

        return view('comprar', ['libro' => $libro]);
    }

    public function comprar(Request $request, $id)
    {
        $libro = Libro::find($id);

        if (is_null($libro)) {
            return redirect()->route('index')->with('error', 'El libro buscado no existe.');
        }

        $cantidad = $request->input('cantidad', 1);

        if ($libro->stock < $cantidad) {
            return redirect()->route('formulario', $id)->with('error', 'No hay suficiente stock para realizar la compra.');
        }

        $libro->stock -= $cantidad;
        $libro->save();

        return redirect()->route('show', $id)->with('success', 'Compra realizada con éxito.');
    }
}


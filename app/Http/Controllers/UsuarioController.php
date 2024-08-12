<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    // Listar Usuarios
    public function index(){
        $usuario = Usuario::get();
        return $usuario;
    }

    // Ver un Usuario
    public function show($id){
        $usuario = Usuario::find($id);
        if (is_null($usuario)) {
            return 'El usuario buscado no existe.';
        }
        return $usuario;
    }

    // Crear un Usuario
    public function store(Request $request){
        $params = $request->all();
        $usuario = Usuario::create([
            'name' => $params['name'],
            'email' => $params['email'],
            'password' => $params['password']
        ]);
        
        return $usuario;
    }

    // Eliminar Usuario
    public function destroy($id){
        $usuario = Usuario::find($id)->delete();

        if ($usuario){
            return 'Usuario eleminado.';
        }else{
            return 'No se pudo eliminar.';
        }
    }

    // Actualizar Usuario
    public  function update ($id,Request $request){
        $params = $request->all();
        $usuario = Usuario::find($id)->update([
            'nombre' => $params['nombre'],
            'email' => $params['email'],
            'password' => $params['password']
        ]);
        return $usuario ? 'El Usuario fue actualizado.' : 'No se pudo actualizar al Usuario.';
    }
}

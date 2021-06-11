<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RegistroController extends Controller
{

    public function registrar(Request $request){
        $apellidos = $request->input('apellidos');
        $nombre = $request->input('nombre');
        $correo = $request->input('correo');
        $usuario_ig = $request->input('usuario_ig');
        $telefono = $request->input('telefono');

        $nuevoVendedor = new User();
        $nuevoVendedor->apellidos = $apellidos;
        $nuevoVendedor->nombre = $nombre;
        $nuevoVendedor->correo = $correo;
        $nuevoVendedor->usuario_ig = $usuario_ig;
        $nuevoVendedor->telefono =$telefono;
        $nuevoVendedor->save();

        return response()->json([
            "mensanje" => "Vendedor creado",
            "vendedor" => $nuevoVendedor
        ]);
    }

    public function registro(){
        return view('registro');
    }
}

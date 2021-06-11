<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function registro(){
        return view('registro');
    }

    public function registrar(Request $request){
        dd($request->all());
    }
}

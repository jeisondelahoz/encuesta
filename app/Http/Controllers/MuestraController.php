<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuestraController extends Controller
{
    public function index(){

        $titulo = 'Encuesta de condicion de salud';
        
        return view('encuesta.index', [
            'titulo' => $titulo
            ]);
    }
}

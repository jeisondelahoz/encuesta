<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class EncuestaController extends Controller
{
    public function index($pagina = 1){

        $titulo = 'Encuesta de condicion de salud';
                
        return view('encuesta.index', [
            'titulo' => $titulo,
            'pagina' => $pagina
            ]);
    }

    public function detalle(){
        return view('encuesta.detalle');

    }

    public function formulario(){

        return view('encuesta.formulario');
    }

    public function recibir(Request $request){
        dd($request->all());
        $nombre = $request->input('nombre');
        $documento = $request->input('documento');
        $cargo = $request->input('cargo');

        return "EL nombre es: $nombre y el email es $documento $cargo";
        var_dump($nombre);
   
    }


    


}

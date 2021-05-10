<?php

namespace App\Http\Contollers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()

    {
        return view('user');

    }

    public function show($id)
    {
        return "Mostrando detalle del usuario: {$id}";

    }

    public function create()
    {
        return'Crear nuevo usuario';

    }

}
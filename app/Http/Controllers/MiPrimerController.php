<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Aprendiz;

class MiPrimerController extends Controller
{
    public function saludo()
    {
        return view('saludo');
    }
    public function perfil()
    {
        return view('perfil');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SistemaController extends Controller
{
    public function Sistema(){
        $vistas =view('sistema');
        return $vistas;
    }
}

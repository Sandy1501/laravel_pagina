<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function mercurio(){
        $vistas =view('categorias/mercurio');
        return $vistas;
    }
    public function venus(){
        $vistas =view('categorias/venus');
        return $vistas;
    } 
    public function tierra(){
        $vistas =view('categorias/tierra');
        return $vistas;
    } 
    public function marte(){
        $vistas =view('categorias/marte');
        return $vistas;
    } 
    public function jupiter(){
        $vistas =view('categorias/jupiter');
        return $vistas;
    } 
    public function saturno(){
        $vistas =view('categorias/saturno');
        return $vistas;
    } 
    public function urano(){
        $vistas =view('categorias/urano');
        return $vistas;
    } 
    public function neptuno(){
        $vistas =view('categorias/neptuno');
        return $vistas;
    } 
    public function pluton(){
        $vistas =view('categorias/pluton');
        return $vistas;
    } 
}

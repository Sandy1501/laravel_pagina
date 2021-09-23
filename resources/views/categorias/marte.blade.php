@extends('layout.plantilla');
@section('titulo','Marte')
@section('contenido')

<!--Informacion de la planeta-->
<div class="container-fluid mt-4" style="background: -webkit-radial-gradient(#f96a86, #ffa3b5, #f44a6c);">
    <div class="row justify-content-between">
        <div class="col col-sm-3">
            <h1 class="display-4 text-white text-center">Marte</h1>
            <img src="{{ asset('img/marte1.png')}}" class="rounded mx-auto d-block" width="150"  alt="">
            <hr class="w-100">
            <p>
                
            </p>
            <p class="text-justify">
                Marte es un planeta desértico y frío. Es la mitad del tamaño de la Tierra, y también recibe el nombre de 
                "planeta rojo". Es rojo por el hierro oxidado que tiene en el suelo.</p>
            </p>  
        </div>
        <div class="col col-sm-3 mt-4">
            <br>
            <p class="text-justify">
                Los científicos quieren saber si Marte podría haber tenido seres vivos en el pasado. También quieren saber 
                si Marte podría albergar vida ahora o en el futuro.</p>
              <br>
              <p>
                  El tiempo en jupiter, un día dura solo 24.6 horas un poco más que en la tierra, y un año equivele a 687,8 días en la tierra casi el doble del año terrestre. 
                  Tiene 2 lunas fobos y deimos es el 4 planeta contando desde el sol, así que tiene a la tierra y a jupiter por vecino. 
              </p> 
        </div>
        <div class="col col-sm-3 mt-3">
            <br>
            <br>
            <p class="text-justify">
                Hay signos de antiguas inundaciones en Marte, pero ahora el agua existe principalmente en su polvo helado y sus nubes delgadas.
                 En algunas laderas marcianas, se han encontrado pruebas de agua líquida salada.
            </p>
            <br>
            <br>
            <img src="{{ asset('img/marte2.png')}}" class="rounded mx-auto d-block" width="100"  alt="">
        </div>
    </div>
</div>

@endsection
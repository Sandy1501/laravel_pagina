@extends('layout.plantilla');
@section('titulo','Neptuno')
@section('contenido')

<!--Informacion de la planeta-->
<div class="container-fluid mt-4" style="background: -webkit-radial-gradient(#3e5f8a, #6a9cde, #cadffb);">
    <div class="row justify-content-between">
        <div class="col col-sm-3">
            <h1 class="display-4 text-white text-center">Neptuno</h1>
            <img src="{{ asset('img/neptuno1.png')}}" class="rounded mx-auto d-block" width="150"  alt="">
            <hr class="w-100">
            <p>
                
            </p>
            <p class="text-justify">
                Neptuno es oscuro, frío y muy ventoso. Es el último de los planetas de nuestro sistema solar. Está más de 30 veces más 
                lejos del Sol que la Tierra. Neptuno es muy parecido a Urano..</p>
            </p>  
        </div>
        <div class="col col-sm-3 mt-4">
            <br>
            <p class="text-justify">
                Está compuesto de una espesa mezcla de agua, amoniaco y metano sobre un centro sólido del tamaño de la Tierra. 
                Su atmósfera se compone de hidrógeno, helio y metano.</p>
              <br>
              <p>
                Un día dura 16 horas,
                su recorrido alrededor del Sol es tan largo que tarda 165 años terrestres en completarlo… ¡Tiene un año larguísimo</p> 
              </p> 
        </div>
        <div class="col col-sm-3 mt-3">
            <br>
            <br>
            <p class="text-justify">
                Está rodeado por seis anillos,
                como Urano, es un gigante de hielo, es parecido a un gigante de gas, está hecho de una espesa mezcla de agua, 
                amoniaco y metano sobre un centro sólido del tamaño de la Tierra.
                tiene una atmósfera densa y ventosa.</p> 
            </p>
            <br>
            <br>
            <img src="{{ asset('img/neptuno2.png')}}" class="rounded mx-auto d-block" width="80"  alt="">
        </div>
    </div>
</div>

@endsection
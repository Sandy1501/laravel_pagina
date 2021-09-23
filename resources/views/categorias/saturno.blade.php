@extends('layout.plantilla');
@section('titulo','Saturno')
@section('contenido')

<!--Informacion de la planeta-->
<div class="container-fluid mt-4" style="background: -webkit-radial-gradient(#ecab0f, #f7d547, #d09306);">
    <div class="row justify-content-between">
        <div class="col col-sm-3">
            <h1 class="display-4 text-white text-center">Saturno</h1>
            <img src="{{ asset('img/saturno1.png')}}" class="rounded mx-auto d-block" width="150"  alt="">
            <hr class="w-100">
            <p>
                
            </p>
            <p class="text-justify">
                Saturno no es el único planeta que tiene anillos, pero definitivamente tiene los más bellos. Los anillos que
                 vemos están compuestos por grupos de pequeños aros que rodean a Saturno.</p>
            </p>  
        </div>
        <div class="col col-sm-3 mt-4">
            <br>
            <p class="text-justify">
                Están hechos de pedazos de hielo y roca. Como Júpiter, Saturno es una pelota de hidrógeno y helio, en gran parte. 
                Cuando Galileo Galilei vio a Saturno a través de un telescopio en el siglo XVII, no estaba seguro de lo que estaba 
                viendo.</p>
              <br>
              <p>
                Al principio, creyó que estaba mirando tres planetas, o un planeta con asas. Ahora, sabemos que esas "asas" 
                eran los anillos de Saturno.</p> 
              </p> 
        </div>
        <div class="col col-sm-3 mt-3">
            <br>
            <br>
            <p class="text-justify">
                Es un gigante de gas, como Júpiter. Está compuesto por hidrógeno y helio, sobre todo.
                Tiene una atmósfera densa.
                Cuenta con un precioso grupo de siete anillos separados por espacio entre ellos.</p> 
            </p>
            <br>
            <br>
            <img src="{{ asset('img/saturno2.png')}}" class="rounded mx-auto d-block" width="80"  alt="">
        </div>
    </div>
</div>

@endsection
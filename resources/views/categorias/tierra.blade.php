@extends('layout.plantilla');
@section('titulo','Tierra')
@section('contenido')

<!--Informacion de la planeta-->
<div class="container-fluid mt-4" style="background: -webkit-radial-gradient(#5ccb5f, #98ff96, #009929);">
    <div class="row justify-content-between">
        <div class="col col-sm-3">
            <h1 class="display-4 text-white text-center">Tierra</h1>
            <img src="{{ asset('img/tierra1.png')}}" class="rounded mx-auto d-block" width="150"  alt="">
            <hr class="w-100">
            <p>
                
            </p>
            <p class="text-justify">
                Nuestro hogar, el planeta Tierra, es un planeta terrestre y rocoso. Tiene una superficie sólida y activa, con montañas, valles, cañones, llanuras y mucho más. La Tierra es especial porque es un planeta océano, 
                ya que el agua cubre el 70% de su superficie.</p>
            </p>  
        </div>
        <div class="col col-sm-3 mt-4">
            <br>
            <p class="text-justify">
                Nuestra atmósferaestá compuesta, en gran parte, por nitrógeno. También tiene mucho oxígeno, que nos permite respirar. Además, nos protege de los meteoroides que se acercan a la Tierra, la mayoría de los cuales se desintegran 
                en nuestra atmósfera antes de llegar a la superficie en forma de meteoritos.</p>
              <br>
              <p>
                Es posible que, como se trata de nuestro hogar, pienses que lo sabemos todo sobre la Tierra. ¡La verdad es que no! Aún nos queda mucho por aprender sobre nuestro planeta.  
              </p> 
        </div>
        <div class="col col-sm-3 mt-3">
            <br>
            <br>
            <p class="text-justify">
                Actualmente, hay muchos satélites en órbita alrededor de la Tierra, tomando fotos y realizando mediciones. Esto nos permite saber más cosas sobre el clima, los océanos, la tierra, el cambio climático y muchos otros temas importantes.
            </p>
            <br>
            <br>
            <img src="{{ asset('img/tierra2.png')}}" class="rounded mx-auto d-block" width="100"  alt="">
        </div>
    </div>
</div>

@endsection
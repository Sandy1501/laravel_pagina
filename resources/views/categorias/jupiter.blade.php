@extends('layout.plantilla');
@section('titulo','Jupiter')
@section('contenido')

<!--Informacion del planeta-->
<div class="container-fluid mt-4" style="background: -webkit-radial-gradient( #fbe3e3,#fdb4bf, #f6c8c7);">
    <div class="row justify-content-between">
        <div class="col col-sm-3">
            <h1 class="display-4 text-white text-center">Jupiter</h1>
            <img src="{{ asset('img/jupiter1.png')}}" class="rounded mx-auto d-block" width="150"  alt="">
            <hr class="w-100">
            <p>
                
            </p>
            <p class="text-justify">
              Júpiter es el planeta más grande de nuestro sistema solar. Es parecido a una estrella, pero nunca llegó a ser 
              lo suficientemente masiva como para empezar a arder.
            </p>  
        </div>
        <div class="col col-sm-3 mt-4">
            <br>
            <br>
            <br>
            <p class="text-justify">
              Está cubierto de rayas de nubes arremolinadas. Tiene fuertes tormentas como la Gran Mancha Roja, 
              que hace cientos de años que dura.</p>
              <br>
              <br>
              <p>
                  El tiempo en jupiter, un día dura solo 10 horas, y un año equivele a 11,8 años en la tierra. 
                  Tiene 79 lunas confirmadas es el 5 planeta contando desde el sol, así que tiene a marte y saturno por vecino. 
              </p> 
        </div>
        <div class="col col-sm-3 mt-3">
            <br>
            <br>
            <p class="text-justify">
                 Júpiter es un gigante hecho de gas, y no tiene una superficie sólida, pero puede tener un núcleo interno sólido de aproximadamente el tamaño de la Tierra. 
                 Júpiter también tiene anillos, pero son demasiado tenues para verlos muy bien.
            </p>
            <br>
            <br>
            <img src="{{ asset('img/jupiter3.png')}}" class="rounded mx-auto d-block" width="100"  alt="">
        </div>
    </div>
</div>

@endsection
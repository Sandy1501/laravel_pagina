@extends('layout.plantilla');
@section('titulo','Urano')
@section('contenido')

<!--Informacion de la planeta-->
<div class="container-fluid mt-4" style="background: -webkit-radial-gradient(#6aa9e9, #318CE7, #afcdea);">
    <div class="row justify-content-between">
        <div class="col col-sm-3">
            <h1 class="display-4 text-white text-center">Urano</h1>
            <img src="{{ asset('img/urano1.png')}}" class="rounded mx-auto d-block" width="150"  alt="">
            <hr class="w-100">
            <p>
                
            </p>
            <p class="text-justify">
                Urano está compuesto de agua, metano y amoniaco sobre un pequeño centro rocoso. Su atmósfera está hecha de hidrógeno y helio, como Júpiter y Saturno, pero además contiene metano. 
                El metano es lo que le da a Urano el color azul.
            </p>  
        </div>
        <div class="col col-sm-3 mt-4">
            <br>
            <p class="text-justify">
                Urano también tiene anillos tenues. Los anillos internos son angostos y oscuros. Los anillos externos tienen colores vivos y son más fáciles de ver. Como Venus, Urano rota en dirección opuesta a la de la mayoría de los otros planetas. 
                Y, a diferencia de cualquier otro planeta, Urano rota de lado.</p>
              <br>
              <p>
                El séptimo planeta desde el sol, Urano es un bicho raro. Los astrónomos creen que el planeta colisionó con otros objetos del mismo tamaño hace tiempo, causando esta inclinación.  
              </p> 
        </div>
        <div class="col col-sm-3 mt-3">
            <br>
            <br>
            <p class="text-justify">
                Esto causa estaciones extremas que duran más de 20 años, y el sol solamente cae a plomo sobre un polo o el otro durante 84 años terrestres. Urano tiene el mismo tamaño que Neptuno.
            </p>
            <br>
            <br>
            <img src="{{ asset('img/urano2.png')}}" class="rounded mx-auto d-block" width="100"  alt="">
        </div>
    </div>
</div>

@endsection
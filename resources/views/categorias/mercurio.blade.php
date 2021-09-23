@extends('layout.plantilla');
@section('titulo','Mercurio')
@section('contenido')

<!--Informacion de la planeta-->
<div class="container-fluid mt-4" style="background: -webkit-radial-gradient(#ecab0f, #b57c00, #f7d547);">
    <div class="row justify-content-between">
        <div class="col col-sm-3">
            <h1 class="display-4 text-white text-center">Mercurio</h1>
            <img src="{{ asset('img/mercurio1.png')}}" class="rounded mx-auto d-block" width="150"  alt="">
            <hr class="w-100">
            <p>
                
            </p>
            <p class="text-justify">
                Mercurio es el planeta más pequeño de nuestro sistema solar. Simplemente, es un poco más grande que la Luna de la Tierra.
                 Es el planeta más cercano al Sol, pero no es realmente el más cálido. Venus es el más cálido.</p>
            </p>  
        </div>
        <div class="col col-sm-3 mt-4">
            <br>
            <p class="text-justify">
                Junto con Venus, la Tierra y Marte, Mercurio es uno de los planetas rocosos. Tiene una superficie sólida que está cubierta 
                de cráteres. Tiene una atmósfera delgada y no tiene ninguna luna. A Mercurio le gusta simplificar las cosas.</p>
              <br>
              <p>
                Este planeta pequeño da vueltas lentamente comparado con la Tierra, por lo tanto, un día dura un largo tiempo. 
                A Mercurio le lleva 59 días de la Tierra hacer una rotación completa. Un año en Mercurio pasa rápido. 
              </p> 
        </div>
        <div class="col col-sm-3 mt-3">
            <br>
            <br>
            <p class="text-justify">
                Un día en Mercurio no es como un día aquí en la Tierra. Para nosotros, el Sol sale y se pone todos los días. Debido a que
                 Mercurio gira lentamente y tiene un año corto, le lleva mucho tiempo al Sol salir y ponerse allí. 
            </p>
            <br>
            <br>
            <img src="{{ asset('img/mercurio2.png')}}" class="rounded mx-auto d-block" width="80"  alt="">
        </div>
    </div>
</div>

@endsection
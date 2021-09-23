@extends('layout.plantilla');
@section('titulo','Venus')
@section('contenido')

<!--Informacion de la planeta-->
<div class="container-fluid mt-4" style="background: -webkit-radial-gradient(#fdb4bf, #f99aaa, #ffcdd4);">
    <div class="row justify-content-between">
        <div class="col col-sm-3">
            <h1 class="display-4 text-white text-center">Venus</h1>
            <img src="{{ asset('img/venus1.png')}}" class="rounded mx-auto d-block" width="150"  alt="">
            <hr class="w-100">
            <p>
                
            </p>
            <p class="text-justify">
                NAunque Venus no es el planeta más cercano al Sol, es el más caliente. Tiene una atmósfera densa, llena de 
                dióxido de carbono, que provoca el efecto invernadero, y de nubes compuestas de ácido sulfúrico.</p>
            </p>  
        </div>
        <div class="col col-sm-3 mt-4">
            <br>
            <p class="text-justify">
                Los gases atrapan el calor y mantienen a Venus bien calentito. De hecho, hace tanto calor en Venus que metales 
                como el plomo serían charcos de metal fundido. Venus es poco común porque gira en dirección contraria a la de la 
                Tierra y la mayoría de los otros planetas. Y su rotación es muy lenta. Tarda alrededor de 243 días terrestres en 
                girar solo una vez.</p>
              <br>
        </div>
        <div class="col col-sm-3 mt-3">
            <br>
            <br>
            <p class="text-justify">
                Debido a que las longitudes del día y del año son similares, un día en Venus no es como un día en la Tierra. Aquí, en la Tierra, el Sol sale y se pone una vez por día. En Venus, el Sol sale cada 117 días terrestres.
            </p>
            <br>
            <br>
            <img src="{{ asset('img/venus2.png')}}" class="rounded mx-auto d-block" width="80"  alt="">
        </div>
    </div>
</div>

@endsection
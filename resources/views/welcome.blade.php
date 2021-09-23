@extends('layout.plantilla');
@section('titulo','Sistema solar')
@section('contenido')

<!--Aqui esta el logo-->
<header class="container-fluid">
    <div class="row" style="height: 450px; background: -webkit-radial-gradient(pink, mediumaquamarine, violet);">
        <div class="col-12 align-self-center text-center">
            <img src="{{ asset('img/sistem.png')}}" class="img-fliud" width="150"  alt="">
                <h1 class="mt-4">"Un espacio implica la conciencia de las posibilidades de la luz"</h1>
                <h4>Men Backend</h4>
        </div>
    </div>
</header>

<!--Imagenes de los planetas ligadas a su informacion-->
<section class="container-flid">
    <div class="row justify-content-center mb-5">
        <div class="col-12 text-center mt-5">
            <h2>Los Planetas</h2>   
        </div>
        <div class="col-4 text-center mt-5">
            <a href="/categorias/mercurio"><img src="{{ asset('img/mercurio.jpg')}}" class="img-fliud" width="200"  alt=""></a>
        </div>
        <div class="col-4 text-center mt-5">
            <a href="/categorias/venus"><img src="{{ asset('img/venus.jpg')}}" class="img-fliud" width="200"  alt=""></a>
        </div>
        <div class="col-4 text-center mt-5">
            <a href="/categorias/tierra"><img src="{{ asset('img/tierra.jpg')}}" class="img-fliud" width="200"  alt=""></a>
        </div>
        <div class="col-4 text-center mt-5">
            <a href="/categorias/marte"><img src="{{ asset('img/marte.jpg')}}" class="img-fliud" width="200"  alt=""></a>
        </div>
        <div class="col-4 text-center mt-5">
            <a href="/categorias/jupiter"><img src="{{ asset('img/jupiter.jpg')}}" class="img-fliud" width="200"  alt=""></a>
        </div>
        <div class="col-4 text-center mt-5">
            <a href="/categorias/saturno"><img src="{{ asset('img/saturno.jpg')}}" class="img-fliud" width="200"  alt=""></a>
        </div>
        <div class="col-4 text-center mt-5">
            <a href="/categorias/urano"><img src="{{ asset('img/urano.jpg')}}" class="img-fliud" width="200"  alt=""></a>
        </div>
        <div class="col-4 text-center mt-5">
            <a href="/categorias/neptuno"><img src="{{ asset('img/neptuno.jpg')}}" class="img-fliud" width="200"  alt=""></a>
        </div>
        <div class="col-4 text-center mt-5">
            <a href="/categorias/pluton"><img src="{{ asset('img/pluton.jpg')}}" class="img-fliud" width="200"  alt=""></a>
        </div>
    </div>
</section>

<!--Informacion del sistema solar-->
<section class="container-fluid">
    <div class="row justify-content-center py-5" style="height: 400px; background: -webkit-radial-gradient(pink, mediumaquamarine, violet);">
        <div class="col-12 text-center mt-5 mb-4">
            <h2>El sistema solar</h2>
            <img src="{{ asset('img/sistema.png')}}" class="img-fliud" width="80"  alt="">
        </div>
        <div class="col-4">
            <p class="text-justify">El sistema solar​ es el sistema planetario que liga gravitacionalmente a un conjunto de objetos astronómicos que giran directa o indirectamente en una órbita alrededor de una única estrella conocida con el nombre de Sol.</p>
        </div>
        <div class="col-4">
            <p class="text-justify">Nuestro sistema solar consiste en una estrella mediana que llamamos el Sol y los planetas Mercurio, Venus, Tierra, Marte, Júpiter, Saturno, Urano, Neptuno, y Plutón. Incluye: los satélites de los planetas, numerosos cometas, asteroides, y meteoroides.</p>
        </div>
    </div>
</section>


    
@endsection




    

    

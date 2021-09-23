@extends('layout.plantilla');
@section('titulo','Pluton')
@section('contenido')

<!--Informacion de la planeta-->
<div class="container-fluid mt-4" style="background: -webkit-radial-gradient(#a06c3f, #b88b5c, #834f23);">
    <div class="row justify-content-between">
        <div class="col col-sm-3">
            <h1 class="display-4 text-white text-center">Pluton</h1>
            <img src="{{ asset('img/pluton1.png')}}" class="rounded mx-auto d-block" width="150"  alt="">
            <hr class="w-100">
            <p>
                
            </p>
            <p class="text-justify">
                Plutón está catalogado como un planeta enano. En 2006, Plutón fue categorizado con otros tres objetos en el sistema 
                solar que son aproximadamente del mismo tamaño que Plutón: Ceres, Makemake y Eris. Estos objetos, junto con Plutón, 
                son mucho más pequeños que los "otros" planetas.</p>
            </p>  
        </div>
        <div class="col col-sm-3 mt-4">
            <br>
            <p class="text-justify">
                Plutón es un planeta enano que se encuentra en el cinturón de Kuiper. Es un área llena de objetos helados y otros 
                planetas enanos en el borde de nuestro sistema solar. Debido a que Plutón es el objeto más grande conocido en esta 
                región, algunos lo llaman "Rey del Cinturón de Kuiper".</p>
              <br>
              <p>
                Una cosa es segura. Plutón y su vecindario son muy peculiares. Si los científicos pudieran desentrañar algunos de sus misterios, 
                sabríamos más sobre cómo se formó nuestro sistema solar.</p> 
              </p> 
        </div>
        <div class="col col-sm-3 mt-3">
            <br>
            <br>
            <p class="text-justify">
                El ancho de Plutón equivale solamente a la mitad de los Estados Unidos. Caronte tiene aproximadamente la mitad del 
                tamaño de Plutón. En comparación con su planeta, ¡Caronte es la luna más grande del sistema solar!</p> 
            </p>
            <br>
            <br>
            <img src="{{ asset('img/pluton2.png')}}" class="rounded mx-auto d-block" width="80"  alt="">
        </div>
    </div>
</div>

@endsection
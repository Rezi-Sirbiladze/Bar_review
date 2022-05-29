@extends('layouts.list_restaurants')
@section('titulo','Estableciminteos') 

@section('list_restaurants')
    
<h1>Parte all_restaurants</h1>
@endsection
 
<div class="restaurant_item">
    <h2>prueba restaurant_item</h2>
</div>
<div class="row">
    <h1>Lista de restaurantes</h1>
    @if(session('mensaje'))
        <h5>{{session('mensaje')}}</h5>
    @endif

    @foreach ($establecimientos as $item)
    <h1>PRUEBA SI ESTA PARTE FUNCIONA</h1>
    <!--<div class="col mt-2">
        <div class="card" style="width: 18rem;">
            <img src="./img/spain.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$item->name}}</h5>
                <p class="card-text">{{$item -> sol_esp}}</p>

                @if ($item->myValoracion() == 1)
                <a class="btn btn-warning mb-2" href="{{route("mis_valoraciones.edit",$item->id)}}">
                    <i class="fa fa-edit">Ver valoración</i>
                </a>
                @else
                <a class="btn btn-warning mb-2" href="{{route("valorar_establecimiento",$item->id)}}">
                    <i class="fa fa-edit">Valorar</i>
                </a>
                @endif


            </div>
        </div>
    </div>   
    @endforeach
</div> 

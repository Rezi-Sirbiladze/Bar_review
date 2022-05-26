@extends('layouts.layout')

@section('titulo','Estableciminteos')

@section('contenido')
<div class="row">
    <h1>Establecimientos</h1>
    @if(session('mensaje'))
        <h5>{{session('mensaje')}}</h5>
    @endif

    @foreach ($establecimientos as $item)
    <div class="col mt-2">
        <div class="card" style="width: 18rem;">
            <img src="./img/spain.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$item->id}} - {{$item->user->name}}</h5>
                <p class="card-text">{{$item}}</p>

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
@endsection
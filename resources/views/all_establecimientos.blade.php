@extends('layouts.layout')

@section('titulo','Estableciminteos')

@section('contenido')
<div class="row">
    <h1>Estableciminteos</h1>
    @if(session('mensaje'))
        <h5>{{session('mensaje')}}</h5>
    @endif
    
    <form method="post" action="{{ route('mis_establecimientos.store') }}"> 
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" name="name" value="{{old('name')}}"/> 
        <button type="submit">Crear</button>
    </form>

    @foreach ($establecimientos as $item)
    <div class="col mt-2">
        <div class="card" style="width: 18rem;">
            <img src="./img/spain.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$item->id}} - {{$item->user->name}}</h5>
                <p class="card-text">{{$item}}</p>


                <a class="btn btn-warning mb-2" href="{{route("mis_establecimientos.edit",[$item])}}">
                    <i class="fa fa-edit">Editar</i>
                </a>

                <form action="{{route("mis_establecimientos.destroy", [$item->id])}}" method="post">
                    @method("delete")
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        <i class="fa fa-trash">Eliminar</i>
                    </button>
                </form>

            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
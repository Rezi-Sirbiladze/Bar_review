@extends('layouts.layout')

@section('titulo','Estableciminteos')

@section('contenido')
<div class="row">
    <h1>Establecimientos</h1>
    <h2>Otra prueba</h2>
    @foreach ($TopEstablecimientos as $item)
    <div class="col mt-2">
        <div class="card" style="width: 18rem;">
            <img src="./img/spain.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$item->id}}</h5>
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


@extends('layouts.layout')

@section('titulo','Editar Establecimientos')

@section('contenido')
<div class="row">
    <h1>Editar Establecimientos</h1>
    <div class="col-12">
        <form method="POST" action="{{route("mis_establecimientos.update", [$Establecimiento->id])}}">
            @method("PUT")
            @csrf
            <div class="form-group">
                <label class="label">Nombre</label>
                <input required value="{{$Establecimiento->name}}" autocomplete="off" name="name" class="form-control" type="text" placeholder="name">
            </div>

            <button class="btn btn-success">Guardar</button>
            <a class="btn btn-primary" href="{{route("mis_establecimientos.index")}}">Volver</a>
        </form>
    </div>
</div>
@endsection
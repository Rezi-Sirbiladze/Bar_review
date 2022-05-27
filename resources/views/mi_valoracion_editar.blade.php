@extends('layouts.layout')

@section('titulo','Editar Establecimientos')

@section('contenido')
<div class="row">
    <h1>Editar Establecimiento</h1>
        <form method="post" action="{{route("mis_valoraciones.update", [$valoracion->id])}}"> 
            @method("PUT")
            @csrf
            <div class="col-auto">
                <label class="form-label" for="customRange1">Nota</label>
                <div class="range">
                <input type="range" class="form-range" id="nota" name="nota"  value="{{$valoracion->nota}}"/>
            </div>
            <div class="mb-3">
                <label for="puntos_pos" class="form-label">Puntos positivos</label>
                <textarea class="form-control" id="puntos_pos" name="puntos_pos" rows="3" value="{{$valoracion->puntos_pos}}">{{$valoracion->puntos_pos}}</textarea>
            </div>
            <div class="mb-3">
                <label for="puntos_neg" class="form-label">Puntos positivos</label>
                <textarea class="form-control" id="puntos_neg" name="puntos_neg" rows="3" value="{{$valoracion->puntos_neg}}">{{$valoracion->puntos_neg}}</textarea>
            </div>
            <div class="col-auto">
                <input type="hidden" name="valoracion_id" value="{{$valoracion->id}}">
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("establecimientos")}}">Volver</a>

                <form action="{{route("mis_valoraciones.destroy", [$valoracion->id])}}" method="post">
                    @method("delete")
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        <i class="fa fa-trash">Eliminar</i>
                    </button>
                </form>
            </div>


        </form>
    </div>
</div>
@endsection
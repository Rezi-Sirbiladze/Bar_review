@extends('layouts.layout')

@section('titulo','Editar Establecimientos')

@section('contenido')
<div class="container">
    <div class="content_establecimiento">
        <h1 class="header_title">Editar Establecimiento - {{$Establecimiento->name}}</h1>
        <div class="edit_establecimiento">
        <form method="post" action="{{route("mis_valoraciones.update", [$valoracion->id])}}"> 
            @method("PUT")
            @csrf
            <div class="group_edit estable_range_price">
                <label class="form-label" for="customRange1">Nota</label>
                <div class="range_slider">
                    <input type="range" class="form-range slider" id="precios"
                    min="0" max="10" name="nota" value="{{$valoracion->nota}}" />
                    
                    <div class="slider_thumb">
                        <div class="tooltip"></div>
                    </div>
                    <div class="progress"></div>
                </div>
            </div>

            <div class="group_edit estable_nombre">
                <label for="name" class="form-label">Puntos positivos</label>
                <input required autocomplete="off" name="puntos_pos" class="form-control" value="{{$valoracion->puntos_pos}}" type="text" placeholder="{{$valoracion->puntos_pos}}">
            </div>

            <div class="group_edit estable_nombre">
                <label for="name" class="form-label">Puntos negativos</label>
                <input required autocomplete="off" name="puntos_neg" class="form-control" value="{{$valoracion->puntos_neg}}" type="text" placeholder="{{$valoracion->puntos_neg}}">
            </div>

            <div class="group_edit group_button_edit">
                <input type="hidden" name="valoracion_id" value="{{$valoracion->id}}">
                <button class="btn_save">Guardar</button>
                <a class="btn_back" href="{{route("establecimientos")}}">Volver</a>
            </div>
        </form>
        <form action="{{route("mis_valoraciones.destroy", [$valoracion->id])}}" method="post">
            @method("delete")
            @csrf
            <button type="submit" class="btn btn_save">Eliminar</button>
        </form>
    </div>
    </div>
</div>
@endsection
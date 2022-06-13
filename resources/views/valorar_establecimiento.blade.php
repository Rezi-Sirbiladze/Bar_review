@extends('layouts.layout')

@section('titulo','Valorar establecimiento')

@section('contenido')
<div class="container">
    <div class="container_establecimiento">
        <h1 class="header_title">Valorar {{$Establecimiento->name}}</h1>
        <div class="content_establecimiento">
            <form method="post" class="edit_establecimiento" action="{{ route('mis_valoraciones.store') }}"> 
            @csrf
                    <div class="group_edit estable_range_price">
                        <label class="form-label" for="customRange1">Nota</label>
                        <div class="range_slider">
                            <input type="range" class="form-range slider" id="precios"
                            min="0" max="10" name="nota"/>
                            
                            <div class="slider_thumb">
                                <div class="tooltip"></div>
                            </div>
                            <div class="progress"></div>
                        </div>
                    </div>
                    <div class="group_edit estable_nombre">
                        <label for="name" class="form-label">Puntos positivos</label>
                        <input required autocomplete="off" name="puntos_pos" id="puntos_pos" class="form-control" type="text">
                    </div>
                    <div class="group_edit estable_nombre">
                        <label for="name" class="form-label">Puntos negativos</label>
                        <input required autocomplete="off" name="puntos_neg" id="puntos_pos" class="form-control" type="text">
                    </div>
                    
                    <div class="group_edit group_button_edit">
                        <input type="hidden" name="establecimiento_id" value="{{$Establecimiento->id}}">
                        <button type="submit" class="btn_save">Confirmar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
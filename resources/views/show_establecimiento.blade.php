@extends('layouts.layout')
@section('titulo','Estableciminteos') 

@section('titulo','Estableciminteos')

@section('contenido')
<div class="container">
    <h1 class="header_establecimientos">Establecimiento</h1>
    <div class="content_establecimiento">
        <div class="edit_establecimiento">
            <div class="group_edit estable_nombre">
                <label for="name" class="form-label">Nombre de establecimiento </label>
                <p>{{$Establecimiento->name}}</p>
            </div>

            <div class="group_edit estable_description">
                <label for="description" class="form-label">Descripcion</label>
                <p>{{$Establecimiento->descripcion}}</p>
            </div>

            <div class="group_edit estable_range_price">
                <label class="form-label" for="customRange1">Precios menu una persona</label>
                <div class="range_slider">
                    <input type="range" class="form-range slider" id="precios"
                    min="1" max="50" name="precios" value="{{$Establecimiento->precios}}" disabled/>
                    
                    <div class="slider_thumb">
                        <div class="tooltip"></div>
                    </div>
                    <div class="progress"></div>
                </div>
            </div>

            <div class="group_edit estable_preferences">
                <label class="form-label" for="customRange1">Solicitudes especiales </label>
                <p>{{$Establecimiento->sol_esp}}</p>
            </div>

            <div class="group_edit estable_workhours">
                <label for="horario" class="form-label">Horario </label>
                <p>{{$Establecimiento->horario}}</p>
            </div>

            <div class="group_edit estable_location">
                <label for="ubicacion" class="form-label">Ubicación</label>
                <p>{{$Establecimiento->ubicacion}}</p>
            </div>

            <div class="group_edit">
                <label for="valoracion" class="form-label">Media de valoración </label>
                <p>{{$Establecimiento->valoracionesAVG()[0]->media_nota}}</p>
            </div>
            


        </div>
    </div>
</div>
@endsection

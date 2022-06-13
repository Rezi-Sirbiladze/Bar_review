@extends('layouts.layout')
@section('titulo','Estableciminteos') 

@section('titulo','Estableciminteos')

@section('contenido')
<div class="container">
    <h1 class="header_title">Establecimiento</h1>
    <div class="content_establecimiento">
        <div class="edit_establecimiento">
            <div class="group_edit estable_nombre">
                <label class="label_info" for="name" class="form-label">Nombre de establecimiento </label>
                <p class="group_edit_info estable_nombre_info">{{$Establecimiento->name}}</p>
            </div>

            <div class="group_edit estable_description">

                <label for="description" class="form-label label_info">Descripcion</label>
                <p>{{$Establecimiento->descripcion}}</p>
            </div>

            <div class="group_edit estable_range_price">
                <label class="label_info" class="form-label" for="customRange1">Precios menu una persona</label>
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
                <label class="label_info" class="form-label" for="customRange1">Solicitudes especiales </label>
                <p class="group_edit_info">{{$Establecimiento->sol_esp}}</p>
            </div>

            <div class="group_edit estable_workhours">
                <label class="label_info" for="horario" class="form-label">Horario </label>
                <p class="group_edit_info">{{$Establecimiento->horario}}</p>
            </div>

            <div class="group_edit estable_location">
                <label class="label_info" for="ubicacion" class="form-label">Ubicación</label>
                <p class="group_edit_info">{{$Establecimiento->ubicacion}}</p>
            </div>

            <div class="group_edit">

                <label for="valoracion" class="label_info">Media de valoración </label>
                @if (isset($Establecimiento->valoracionesAVG()[0]))
                    <p class="group_edit_info">{{$Establecimiento->valoracionesAVG()[0]->media_nota}}</p>
                @else
                    <p class="group_edit_info">Sin notas</p>
                @endif

            </div>
            
            @if (isset($Establecimiento->valoraciones))
            
            <div class="group_edit">
                <label for="valoracion" class="label_info">Valoraciónes</label>
                @foreach ($Establecimiento->valoraciones as $item)
                <div class="opinion" >
                    {{$item->ise}}
                    <p><b>Usuario:</b>   {{$item->user->name}}</p>
                    <p><b>Nota:</b>   {{$item->nota}}</p>
                    <p><b>Puntos positivos:</b>   {{$item->puntos_pos}}</p>
                    <p><b>Puntos negativos:</b>   {{$item->puntos_neg}}</p>
                </div>
                    <br>
                @endforeach
            </div>
            @endif

        </div>
    </div>
</div>
@endsection

@extends('layouts.layout')

@section('titulo','Valorar establecimiento')

@section('contenido')
<div class="container">
    <h1 class="header_establecimientos">Valorar establecimiento</h1>
    <div class="content_establecimiento">
        <div class="edit_establecimiento" >

            <div class="group_edit">
                <form method="post" action="{{ route('mis_valoraciones.store') }}"> 
                    @csrf
                        <div class="col-auto">
                            <label class="form-label" for="customRange1">Nota</label>
                            <div class="range">
                            <input type="range" class="form-range" id="nota" name="nota" />
                        </div>
                            <div class="mb-3">
                                <label for="puntos_pos" class="form-label">Puntos positivos</label>
                                <textarea class="form-control" id="puntos_pos" name="puntos_pos" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="puntos_neg" class="form-label">Puntos positivos</label>
                                <textarea class="form-control" id="puntos_neg" name="puntos_neg" rows="3"></textarea>
                            </div>
                            <div class="col-auto">
                            <input type="hidden" name="establecimiento_id" value="{{$Establecimiento->id}}">
                            <button type="submit" class="btn_editar">Confirm</button>
                        </div>
                </form>
            </div>

            <hr style="height: 5px;  background-color: white; border-color: white; margin-top: 10%">

            <div class="group_edit estable_nombre">
                <label for="name" class="form-label">Nombre de establecimiento </label>
                <p>{{$Establecimiento->name}}</p>
            </div>

            <div class="group_edit estable_description">
                <label for="description" class="form-label">Descripcion</label>
                <input required autocomplete="off" name="description" class="form-control" type="text">
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
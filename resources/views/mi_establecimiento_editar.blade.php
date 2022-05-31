@extends('layouts.layout')

@section('titulo','Editar Establecimientos')

@section('contenido')
<div class="container">
    <h1 class="header_establecimientos">Editar Establecimiento</h1>
    <div class="content_establecimiento">
        <form class="edit_establecimiento" method="POST" action="{{route("mis_establecimientos.update", [$Establecimiento->id])}}">
            @method("PUT")
            @csrf
            <div class="group_edit estable_nombre">
                <label for="name" class="form-label">Nombre de establecimiento</label>
                <input required value="{{$Establecimiento->name}}" autocomplete="off" name="name" class="form-control" type="text" placeholder="name">
            </div>

            <div class="group_edit estable_range_price">
                <label class="form-label" for="customRange1">Precios</label>
                <div class="range">
                <input type="range" class="form-range" id="precios" min="0" max="5" name="precios" value="{{$Establecimiento->precios}}" />
                </div>
            </div>

            <div class="group_edit estable_preferences">
                <label class="form-label" for="customRange1">Solicitudes especiales</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sol_esp" id="flexRadioDefault1" value="Si" @if ($Establecimiento->sol_esp == 'Si') checked @endif>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Si
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="sol_esp" id="flexRadioDefault2" value="No, pero se intenta" @if ($Establecimiento->sol_esp != 'Si') checked @endif>
                    <label class="form-check-label" for="flexRadioDefault2">
                        No, pero se intenta
                    </label>
                </div>
            </div>

            <div class="group_edit estable_workhours">
                <label for="horario" class="form-label">Horario</label>
                <textarea class="form-control" id="horario" name="horario" rows="3" value="{{$Establecimiento->horario}}" >{{$Establecimiento->horario}}</textarea>
            </div>

            <div class="group_edit estable_location">
                <label for="ubicacion" class="form-label">Ubicación de establecimiento</label>
                <input type="text" class="form-control" id="ubicacion" name="ubicacion" value="{{$Establecimiento->ubicacion}}" >
            </div>

            <div class="group_edit group_button_edit">
                <button class="btn_save">Guardar</button>
                <a class="btn_back" href="{{route("mis_establecimientos.index")}}">Volver</a>
            </div>
        </form>
    </div>
</div>
@endsection
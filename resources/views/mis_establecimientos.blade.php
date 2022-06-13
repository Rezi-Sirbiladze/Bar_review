@extends('layouts.layout')

@section('titulo','Estableciminteos')

@section('contenido')


<div class="catalog">
    <div class="container">
        <div class="part_header">
            <h1 class="header_title">Lista restaurantes</h1>
            <nav class="catalog_filter">
                <ul class="filter_wrapper">
                    <li class="filter_item">
                        <button type="button" class="btn filter_btn" data-bs-toggle="modal" 
                        data-bs-target="#exampleModal"><a href="#form_popup">Crear</a></button>
                    </li>
                </ul>
            </nav>
        </div>

                <!--      **VENTANA MODAL**      -->
        <div class="popup" id="form_popup">
            <div class="popup_body">
                <div class="popup_content">
                    <form class="edit_establecimiento modal_create_bar" action="{{ route('mis_establecimientos.store') }}" method="POST" action="">
                        @csrf
                        <a href="#" class="popup_close form_popup_close"><b>X</b></a>
                        <div class="group_edit estable_nombre">
                            <label for="name" class="form-label">Nombre de establecimiento</label>
                            <input required value="" autocomplete="off" name="name" class="form-control" type="text">
                        </div>
                        <div class="group_edit estable_description">
                            <label for="description" class="form-label">Descripcion</label>
                            <input required autocomplete="off" name="descripcion" class="form-control" type="text">
                        </div>
            
                        <div class="group_edit estable_range_price">
                            <label class="form-label" for="customRange1">Precios menu una persona</label>
                            <div class="range_slider">
                                <input type="range" class="form-range slider" id="precios"
                                min="1" max="50" name="precios" value="" />
                                
                                <div class="slider_thumb">
                                    <div class="tooltip"></div>
                                </div>
                                <div class="progress"></div>
                            </div>
                        </div>
            
                        <div class="group_edit estable_preferences">
                            <label class="form-label" for="customRange1">Solicitudes especiales</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sol_esp" id="flexRadioDefault1"
                                    value="Si">
                                    <label class="pref_label" for="flexRadioDefault1">
                                    Si
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sol_esp" id="flexRadioDefault2" 
                                    value="No, pero se intenta">
                                    <label class="pref_label" for="flexRadioDefault2">
                                    No
                                </label>
                            </div>
                        </div>
            
                        <div class="group_edit estable_workhours">
                            <label for="horario" class="form-label">Horario</label>
                            <input class="form-control" type="text" id="horario" name="horario"  value="" >
                        </div>
            
                        <div class="group_edit estable_location">
                            <label for="ubicacion" class="form-label">Ubicación</label>
                            <input type="text" class="form-control" id="ubicacion" name="ubicacion" value="" >
                        </div>
            
                        <div class="group_edit group_button_edit">
                            <button class="btn_save">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>  

        <div class="restaurant_list">
            @foreach ($establecimientos as $item)
                <div class="restaurant_item">
                    <div class="product">
                        <img src="./img/spain.jpg" class="image_rest" alt="...">
                        
                        <div class="product_content">
                            <h3 class="product_title">{{$item->name}}</h3>

                            <div style="padding-left: 10%">
                                    <p><b>Creado</b> {{$item->created_at}}</p>
                                    <p><b>Ubicación</b> {{$item->ubicacion}}</p>
                                    <b>Valoración</b> 
                                    @if ( isset($item->valoracionesAVG()[0]) )
                                        {{$item->valoracionesAVG()[0]->media_nota}}
                                    @endif
                            </div>
                        </div>


                            <div class="ranking_rest_footer">
                                <a class="btn_editar" href="{{route("mis_establecimientos.edit",[$item])}}">
                                    Editar
                                </a>
                                <form class="ranking_form_delete" action="{{route("mis_establecimientos.destroy", [$item->id])}}" method="post">
                                    @method("delete")
                                    @csrf
                                    <button type="submit" class="btn_delete">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                    </div> 
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
@extends('layouts.layout')

@section('titulo','Estableciminteos')

@section('contenido')

<div class="catalog">
    <div class="container">
        @include('layouts.header_buttons')
        
        <div class="restaurant_list">
            @foreach ($TopEstablecimientos as $item)
                <div class="restaurant_item">
                    <div class="product">
                        <img src="./img/spain.jpg" class="image_rest" alt="...">
                            <div class="product_content">
                                <div style="padding-left: 10%">
                                <p><b>Creado</b> {{$item->establecimientoPorId()->created_at}}</p>
                                <p><b>Ubicación</b> {{$item->establecimientoPorId()->ubicacion}}</p>
                                    @if ( null !== $item->valoracionesAVG() )
                                    <p><b>Valoración</b> {{$item->valoracionesAVG()[0]->media_nota}}</p>
                                    @endif
                                </div>
                            </div>

                            <div class="ranking_rest_footer">
                                <a class="btn_editar" href="{{route("mis_establecimientos.show",[$item->id])}}">
                                    Ver
                                </a>
                            </div>
                    </div> 
                </div>
            @endforeach
        </div>


    </div>
</div> 
@endsection
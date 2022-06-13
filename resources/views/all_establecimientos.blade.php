@extends('layouts.layout')
@section('titulo','Estableciminteos') 

@section('titulo','Estableciminteos')

@section('contenido')

<div class="catalog">
    <div class="container">
        <h2 class="header_title">Lista restaurantes</h2>
        <div id="resultado_busqueda" class="restaurant_list">
            @foreach ($establecimientos as $item)
                <div class="restaurant_item">
                    <div class="product">
                            <img src="./img/spain.jpg" class="image_rest" alt="...">
                            <div class="product_content">
                                <h3 class="product_title">{{$item->name}}</h3>
                                <div style="padding-left: 10%">
                                    <p><b>Creado</b> {{substr($item->created_at, 0, 10)}}</p>
                                    <p><b>Ubicación</b> {{$item->ubicacion}}</p>
                                    <p><b>Valoración</b>
                                        @if ( isset($item->valoracionesAVG()[0]) )
                                            {{substr($item->valoracionesAVG()[0]->media_nota, 0, 3)}}
                                        @endif
                                </div>
                            </div>

                            <div class="product_footer">
                                <a class="btn_check_valorar" href="{{route("mis_establecimientos.show", $item->id)}}">Ver</a>
                                @if (Auth::user()->role != "empresa")
                                    @if ($item->myValoracion() == 1)
                                    <a class="btn_check_valorar" href="{{route("mis_valoraciones.edit",$item->id)}}">
                                        Valoración
                                    </a>
                                    @else
                                        <a class="btn_valorar" href="{{route("valorar_establecimiento",$item->id)}}">
                                        Valorar
                                        </a>
                                    @endif
                                @endif

                            </div>
                    </div> 
                </div>
            @endforeach
        </div>
    </div>
</div> 
@endsection

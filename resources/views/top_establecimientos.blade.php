@extends('layouts.layout')

@section('titulo','Estableciminteos')

@section('contenido')

<div class="catalog">
    <div class="container">
        <div class="part_header">
            <h2 class="header_title">Ranking restaurantes</h2>
            <nav class="catalog_filter">
                <ul class="filter_wrapper">
                    <li class="filter_item">
                    <button class="filter_btn" type="button">Todos</button>
                    </li>
                    <li class="filter_item">
                    <button class="filter_btn" type="button">Valoracion</button>
                    </li>
                    <li class="filter_item">
                    <button class="filter_btn" type="button">Comments</button>
                    </li>
                    <li class="filter_item">
                    <button class="filter_btn" type="button">Fecha creacion</button>
                    </li>
                </ul>
            </nav>
        </div>


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
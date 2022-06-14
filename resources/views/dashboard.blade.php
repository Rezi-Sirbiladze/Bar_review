@extends('layouts.layout')

@section('titulo','Dashboard')

@section('contenido')
<div class="container">

        <h1 class="header_title">Dashboard</h1>
        <div class="group_edit">
            <label class="header_title">You're logged in!</label>
            <br>
            @if (Auth::user()->role == "cliente")
                <label>Puntua ;)</label>
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
            @else
                <a style="width: 30%" class="btn_editar" href="{{route('mis_establecimientos.index')}}" class="btn btn-primary">Ver mis establecimientos</a>
            @endif
        </div>

        

</div>
@endsection
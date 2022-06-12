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
                                <h3 class="product_title">{{$item->name}}</h3>
                                <p class="product_description">{{$item -> sol_esp}}</p>
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
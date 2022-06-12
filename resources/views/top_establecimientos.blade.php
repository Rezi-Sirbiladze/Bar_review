@extends('layouts.layout')

@section('titulo','Estableciminteos')

@section('contenido')

<div class="catalog">
    <div class="container">
        @include('layouts.header_buttons')
        
        <div id="resultado_busqueda" class="restaurant_list">
            @foreach ($TopEstablecimientos as $item)
                <div class="restaurant_item">
                    <div class="product">
                        <img src="./img/spain.jpg" class="image_rest" alt="...">
                            <div class="product_content">
                                <div style="padding-left: 10%">
                                <p><b>Nombre</b> {{$item->establecimientoPorId()->name}}</p>
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

<script>
    function buscar(clicked_id){
        var token = $('meta[name="csrf-token"]').attr('content');
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': token}});
        $.ajax({
            url : '{{route('JqueryAjax_ordenar')}}',
            type: 'GET',
            data : {
                '_token': token,
                'orden': clicked_id
            }
        }).done(function( data, textStatus, jqXHR ) {
            console.log(data);
            var appendString = "";



            data.forEach(element => {
                console.log(element);
                var url = '{{ route("mis_establecimientos.show", ":id") }}';
                url = url.replace(':id', element.id);
                appendString +=`
                <div class="restaurant_item">
                    <div class="product">
                        <img src="./img/spain.jpg" class="image_rest" alt="...">
                            <div class="product_content">
                                <div style="padding-left: 10%">
                                <p><b>Nombre</b> ${element.name}</p>
                                <p><b>Creado</b> ${element.created_at}</p>
                                <p><b>Ubicación</b> ${element.ubicacion}</p>
                                    @if ( null !== $item->valoracionesAVG() )
                                    <p><b>Valoración</b> ${element.media_nota}</p>
                                    @endif
                                </div>
                            </div>

                            <div class="ranking_rest_footer">
                                <a class="btn_editar" href="${url}">
                                    Ver
                                </a>
                            </div>
                    </div> 
                </div>
                `;    
            });
            $('#resultado_busqueda').empty().append(appendString);
            
        }).fail(function( jqXHR, textStatus, errorThrown ) {
            alert('Actualiza la página. Ha ocurrido un problema: ' + errorThrown);
        });
    }
</script>


@endsection
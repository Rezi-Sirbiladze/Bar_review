<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo')</title>

    <!--    **       CSS FILES   ****     -->
    <link rel="stylesheet" href="{{ asset('/css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/header_title.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/header_buttons.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/crear_bar_modal.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/all_establecimientos.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/top_establecimientos.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/mis_establecimientos.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/mi_establecimiento_edit.css') }}">
    <!--     ****************   -->

        <!--  **FUENTES ICONOS-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
  </head>

  <body>
    @include('layouts.nav')
    <div class="container">
        @yield('contenido')
    </div>
    
    <!--                JAVASCRIPT     -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('/js/nav.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/slider.js') }}"></script>
  </body>

</html>
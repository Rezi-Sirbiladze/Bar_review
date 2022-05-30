<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurantes</title>
    <link href="{{ asset('/css/restaurantes.css') }}" rel="stylesheet">

    <!--  **FUENTES ICONOS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- ********************-->
    <!-- MDB   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  -->
  </head>
  <body> 
    
    @include('layouts.nav')


      <div class="catalog">
        <div class="container">
          <div class="part_header">
            <h2 class="header_title">Lista restaurantes</h2>
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
            @include('layouts.list_restaurants')
          </div>


        </div>
      </div>  

  </body>
</html>









































  



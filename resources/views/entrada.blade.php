<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bar review welcome</title>
    <link href="{{ asset('/css/entrada.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/nav.css') }}" rel="stylesheet">

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
</head>
<body>

<!--         NAVEGACION     -->
@include('layouts.nav')

<!--                 BLOQUE PRINCIPAL      -->
    <div class="intro" id="intro">
        <div class="container">
            <div class="container-title" style="justify-content: flex-cente;">
                <h1 class="title">WELCOME TO BAR REVIEW</h1>
                @if (Auth::guest())
                    <a class="cuenta" href="#popup">CREAR CUENTA</a>
                @else
                    <a class="cuenta" >Hola {{Auth::user()->name}}</a>
                @endif
            </div>
            <div class="slider">
                <div href="#" class="item"><b>01</b><span class="slider_text">Intro</span></div>
                <div href="#" class="item"><b>02</b><span class="slider_text">About</span></div>
                <div href="#" class="item"><b>03</b><span class="slider_text">Achievements</span></div>
                <div href="#" class="item"><b>04</b><span class="slider_text">Contact</span></div>
            </div>
        </div>
    </div>

        <!--      **VENTANA MODAL**      -->
    <div class="popup" id="popup">
        <div class="popup_body">
            <div class="popup_content">
                <a href="#" class="popup_close"><b>X</b></a>
                <div class="popup_title">Bienvenido</div>
                <div class="popup_text">
                        @include('auth.register')
                </div>
            </div>
        </div>
    </div>  
        <!--      **VENTANA MODAL**      -->

        
    <!--      BLOQUE SOBRE NOSOTROS        -->
    <section class="about">
        <div class="about-container">
            <h2 class="title_description">Sobre nosotros</h2>
            <div class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Corporis inventore laborum ea id sint eius commodi optio iusto sapiente doloremque, provident quas quibusdam, 
                nesciunt esse praesentium maxime voluptatem repudiandae! Exercitationem.
            </div>

            <div class="about_rate">
                <h2 class="title_rate">TOP RATED PLACES</h2>
            </div>
        </div>

        <div class="kitchen">
            @if(isset($TopEstablecimientos[0]))
                <div class="food">
                    <a href="{{route("mis_establecimientos.show", [$TopEstablecimientos[0]->establecimientoPorId()->id])}}">
                        <div class="inner_food">
                            <img class="img_food" src="./img/georgia.jpg" alt="">
                        </div>
                        <div class="food_info">
                            {{$TopEstablecimientos[0]->establecimientoPorId()->name}}
                        </div>
                    </a>
                </div>
            @endif
                
            @if(isset($TopEstablecimientos[1]))
                <div class="food">
                    <a href="{{route("mis_establecimientos.show", [$TopEstablecimientos[1]->establecimientoPorId()->id])}}">
                        <div class="inner_food">
                            <img src="./img/spain.jpg" alt="" class="img_food">
                        </div>
                            <div class="food_info">{{$TopEstablecimientos[1]->establecimientoPorId()->name}}
                        </div>
                    </a>
                </div>
            @endif

            @if(isset($TopEstablecimientos[2]))
                <div class="food">
                    <a href="{{route("mis_establecimientos.show", [$TopEstablecimientos[2]->establecimientoPorId()->id])}}">
                        <div class="inner_food">
                            <img src="./img/ucraine.webp" alt="" class="img_food">
                        </div>
                            <div class="food_info">{{$TopEstablecimientos[2]->establecimientoPorId()->name}}
                        </div>
                    </a>
                </div>
            @endif
        </div>
        <div class="separation"></div>

    </section>



    <!--                 **LOGROS**  -->

    <div class="achievements">
        <h2 class="achievements_title">OUR STATISTICS</h2>
        <div class="achievemnts-block">
            <div class="stat">
                <div class="stat_item">
                    <div class="stat_count">{{$estatisticas["clientes"]}}</div>
                    <div class="stat_text">Clientes</div>
                </div>
                <div class="stat_item">
                    <div class="stat_count">{{$estatisticas["empresas"]}}</div>
                    <div class="stat_text">Empresas</div>
                </div>
                <div class="stat_item">
                    <div class="stat_count">{{$estatisticas["establecimientos"]}}</div>
                    <div class="stat_text">Establecimientos</div>
                </div>
                <div class="stat_item">
                    <div class="stat_count">{{$estatisticas["valoraciones"]}}</div>
                    <div class="stat_text">Valoraciones</div>
                </div>
                <div class="stat_item">
                    <div class="stat_count">{{$estatisticas["clientes"]}}</div>
                    <div class="stat_text">Comentarios</div>
                </div>
            </div>
        </div>
    </div>



<!--                     **FOOTER**               -->

    <footer class="contacts">
        <div class="container_footer">
            <div class="footer_inner">
                <div class="footer_sec1">
                    <div class="logo">BAR Review</div>
                    <div class="footer_text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Doloribus rem hic harum eligendi possimus temporibus, accusantium sit id nisi iste eveniet iusto, 
                        eos debitis sint nobis impedit est ab. Officia!
                    </div>
                <!--       SECCION 1  SUBSCRIBE      -->
                    <div class="footer_social">
                        <p class="followers">
                            <b>15k</b> Followers
                        </p>
                        <div class="social">
                            Follow us:
                            <a href="#">
                                <i class="fa fa-facebook-official"></i>
                                <i class="fa fa-instagram"></i>
                                <i class="fa fa-twitter-square"></i>
                                <i class="fa fa-envelope"></i>
                                <i class="fa fa-google"></i>
                            </a>
                        </div>
                    </div>

                    <form action="" class="subscribe">
                        <input class="email_input" type="email" name="email" placeholder="Your email...">
                        <button class="subscribe_button" type="submit">Subscribe</button>
                    </form>
                </div>


                <!--       SECCION 2 BLOGS      -->
                <div class="footer_sec2">
                        <h3 class="footer_title">Blogs</h3>
                        <div class="articles">
                            <div class="article_item">
                                <img src="./img/georgia.jpg" alt="">
                                <div class="article_content">
                                    <a href="#">Lorem ipsum dolor sit amet,consectetur adipiscing</a>
                                    <div class="data">LA fecha de subida</div>
                                </div>
                            </div>
                            <div class="article_item">
                                <img src="./img/spain.jpg" alt="">
                                <div class="article_content">
                                    <a href="#">Lorem ipsum dolor sit amet,consectetur adipiscing</a>
                                    <div class="data">LA fecha de subida</div>
                                </div>
                            </div>
                            <div class="article_item">
                                <img src="./img/ucraine.webp" alt="">
                                <div class="article_content">
                                    <a href="#">Lorem ipsum dolor sit amet,consectetur adipiscing</a>
                                    <div class="data">LA fecha de subida</div>
                                </div>
                            </div>
                        </div>
                </div>

                <!--         SECCION 3   INSTAGRAM      -->
                <div class="footer_sec3">
                        <h3 class="footer_title">Instagram</h3>
                        <div class="instagram_content">
                            <a class="insta_img" href="">
                                <img src="./img/instagram/american 2.jpg" alt="" class="insta_img">
                            </a>
                            <a class="insta_img" href="">
                                <img src="./img/instagram/australia.jpg" alt="" class="insta_img">
                            </a>
                            <a class="insta_img" href="">
                                <img src="./img/instagram/australia2.jpg" alt="" class="insta_img">
                            </a>
                            <a class="insta_img" href="">
                                <img src="./img/instagram/japan.jpg" alt="" class="insta_img">
                            </a>
                            <a class="insta_img" href="">
                                <img src="./img/instagram/pizza.jpg" alt="" class="insta_img">
                            </a>
                            <a class="insta_img" href="">
                                <img src="./img/instagram/Star Burger.jpg" alt="" class="insta_img">
                            </a>
                            <a class="insta_img" href="">
                                <img src="./img/georgia.jpg" alt="" class="insta_img">
                            </a>
                            <a class="insta_img" href="">
                                <img src="./img/spain.jpg" alt="" class="insta_img">
                            </a>
                            <a class="insta_img" href="">
                                <img src="./img/ucraine.webp" alt="" class="insta_img">
                            </a>
                        </div>

                </div>
            </div>

            <div class="copyright">
                © Bar Review by Ivan and Rezi 2022
            </div>
        </div>
    </footer>


    <!--      JQuery library      -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('/js/nav.js') }}"></script>
</body>
</html>
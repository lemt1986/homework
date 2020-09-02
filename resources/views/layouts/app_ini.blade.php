<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Homework</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{asset("fontawes/css/fontawesome.css")}}" rel="stylesheet">
        <link href="{{asset("fontawes/css/brands.css")}}" rel="stylesheet">
        <link href="{{asset("fontawes/css/solid.css")}}" rel="stylesheet">

        <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">-->
        <link rel="stylesheet" type="text/css" href="{{asset("css/bootstrap/css/bootstrap.min.css")}}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .zoom{
                transition: transform 0.5s;
            }
            .zoom:hover{
                transform: scale(1.1);
                z-index: 1;
            }
        </style>

        <script defer src="{{asset("fontawes/js/brands.js")}}"></script>
        <script defer src="{{asset("fontawes/js/solid.js")}}"></script>
        <script defer src="{{asset("fontawes/js/fontawesome.js")}}"></script>
    </head>
    <body>
       <!-- Image and text -->
       
            <nav class="navbar navbar-light" style="background-color: #4fcdcc;">
              <a class="navbar-brand" href="#">
                <img src="{{asset("img/Logo_1.png")}}" width="250" height="80" class="d-inline-block align-top" alt="" loading="lazy">
                    
              </a>
              <ul class="nav justify-content-end text-white">
                <li class="nav-item">
                 <a class="nav-link active text-white" href="#"><h2>INICIO</h2></a>
                 </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="{{route('nosotros')}}"><h2>NOSOTROS</h2></a>
                 </li>
                <li class="nav-item">
                 <a class="nav-link text-white" href="{{route('soporte.index')}}"><h2>SOPORTE</h2></a>
                </li>
                
              </ul>
            </nav>

            <main class="">
            @yield('contentido')
            </main>

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
       </body>
</html>
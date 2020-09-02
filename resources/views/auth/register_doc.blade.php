<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Homework</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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
        </style>
    </head>
    <body>
       <!-- Image and text -->
       
            <nav class="navbar navbar-light" style="background-color:#d9e022; ">
              <a class="navbar-brand" href="#">
                <img src="{{asset("img/Logo_1.png")}}" width="250" height="80" class="d-inline-block align-top" alt="" loading="lazy">
                   
              </a>
              <ul class="nav justify-content-end text-white">
                <li class="nav-item">
                 <a class="nav-link active text-white" href="#"><h2>INICIO</h2></a>
                 </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#"><h2>NOSOTROS</h2></a>
                 </li>
                <li class="nav-item">
                 <a class="nav-link text-white" href="#"><h2>SOPORTE</h2></a>
                </li>
                
              </ul>
            </nav>

            <div class="jumbotron">
                <h2 class="display-3" style="color: #0d858d;font-weight: bold;">Colabora con nosotros</h2>
                <p class="lead display-4" style="color: #4fafb2;">Unete a nuestro equipo de expertos</p>
                
            </div>
            <div class="container">
                @if (session('mensaje'))
                        <div class="alert alert-success">
                            {{ session('mensaje') }}
                        </div>
                             @elseif(session('mensaje2'))     
                             <div class="alert alert-danger">
                               {{ session('mensaje2') }}
                             </div>                 
                    @endif 
            </div>      

        <div class="container">
            <form action="{{route('docente.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-sm-4 col-form-label" style="color: #30aab0;font-size: 4vh;font-weight: bold;">Nombre y apellidos</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="DNI/CI" class="col-sm-4 col-form-label" style="color: #30aab0;font-size: 4vh;font-weight: bold;">Documento de identidad</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="DNI/CI" name="DNI">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tel" class="col-sm-4 col-form-label" style="color: #30aab0;font-size: 4vh;font-weight: bold;">Teléfono o celular</label>
                    <div class="col-sm-8">
                        <div class="row">
                            
                            <div class="col"><img src="https://ipdata.co/flags/{{$bandera}}.png" class="mx-auto d-block"></div>
                            <div class="col"><input type="text" name="cod" id="cod" class="form-control"></div> 
                            <div class="col-md-8"><input type="text" class="form-control" id="tel" name="tel"></div>
                            
                        </div>
                    
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label" style="color: #30aab0;font-size: 4vh;font-weight: bold;">Email</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="email" name="email" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-4 col-form-label" style="color: #30aab0;font-size: 4vh;font-weight: bold;">Contraseña</label>
                    <div class="col-sm-8">
                    <input type="password" class="form-control" id="password" name="password" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password_c" class="col-sm-4 col-form-label" style="color: #30aab0;font-size: 4vh;font-weight: bold;">Confirmar Contraseña</label>
                    <div class="col-sm-8">
                    <input type="password" class="form-control" id="password_c" name="password_c" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="univ" class="col-sm-4 col-form-label" style="color: #30aab0;font-size: 4vh;font-weight: bold;">Universidad de procedencia</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="univ" name="univ">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="area" class="col-sm-4 col-form-label" style="color: #30aab0;font-size: 4vh;font-weight: bold;">Áreas de conocimiento <br> <p style="font-size: 3vh;color: #768d96;">Seleccionar máximo dos áreas</p> </label>
                    <div class="col-sm-8">
                        <div class="row">
                            @foreach($areas as $area)
                            <div class="col-md-6" style="color: #30aab0;"><input type="checkbox" id="area" name="area" value="{{$area->id}}"> {{$area->area}}</div>
                            @endforeach
                        </div>
                    
                    </div>
                </div>
                <div class="form-group row">
                    <label for="experiencia" class="col-sm-4 col-form-label" style="color: #30aab0;font-size: 4vh;font-weight: bold;">Años de experiencia</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="experiencia" name="experiencia">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="habilidades" class="col-sm-4 col-form-label" style="color: #30aab0;font-size: 4vh;font-weight: bold;">Habilidades</label>
                    <div class="col-sm-8">
                        <div class="row">
                            @foreach($habil as $hab)
                            <div class="col-md-4" style="color: #30aab0;font-size: 3vh;"><input type="checkbox" id="habilidades" name="habilidades" value="{{$hab->id}}"> {{$hab->habilidad}}</div>
                            @endforeach
                        </div>
                    
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-4 col-form-label" style="color: #30aab0;font-size: 4vh;font-weight: bold;">CV</label>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" name="cv" class="custom-file-input" id="customFileLang" lang="es" required>
                            <label class="custom-file-label" for="customFileLang">Subir Archivo</label>
                        </div>                          
                        En formato PDF
                    </div>
                </div>
                <div class="form-group row">
                    <label for="experiencia" class="col-sm-4 col-form-label" style="color: #30aab0;font-size: 4vh;font-weight: bold;">Sobre mí <br> <p style="font-size: 3vh; color: #768d96;">Máximo 20 palabras</p></label>
                    <div class="col-sm-8">
                    <textarea class="form-control" id="validationTextarea" placeholder="Ejm. Soy ingeniero de sistemas y actualmente me Máximo 20 palabras. desempeño en el área de gestión de sistemas." name="resenia"></textarea>
    
                    </div>
                </div>
                <div class="form-group row">
                    <label for="experiencia" class="col-sm-4 col-form-label"></label>
                    <div class="col-sm-8">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                        <label class="form-check-label" for="invalidCheck3" style="color: #30aab0;">
                            He leído y acepto los <a href="">Términos y condiciones</a>  y la <a href="">Política de privacidad</a> 
                        </label>
                      
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col ">
                    <button type="submit" class="btn btn-primary mx-auto d-block">Enviar solicitud</button>
                    </div>
                </div>
            </form>    
        </div>
            
            <main class="">
            @yield('contentido')
            </main>

            <script>
                $custom-file-text: (
  en: "Browse",
  es: "Elegir"
);
            </script>

    <script src="https://code.jquery.com/jquery-latest.js"></script>
<script>
var requestUrl = "https://ipapi.co/json/";

$.ajax({
  url: requestUrl,
  type: 'GET',
  success: function(json)
  {
    var json = json.country_calling_code;

    document.getElementById("cod").value = json;
  },
  error: function(err)
  {
    console.log("Request failed, error= " + err);
  }
}); 
</script>

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
       </body>
</html>
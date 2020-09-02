@extends('layouts.app')

@section('content') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="display-3" style="color: #4fafb2;font-weight: bold;">¿Qué harás hoy?</h1>
            <p style="color: #d9e022;font-weight: bold; font-size: 4vh;">
                <script>
                    var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                    var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                    var f=new Date();
                    document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                </script>
            </p>

            <div class="row">
                <div class="col-md-3">
                    <a href="{{route('words')}}">
                        <img class="img-fluid mx-auto d-block h-50" src="{{asset("img/ejercicio.png")}}"><br>
                        <p align="center" style="color: #4fafb2;font-weight: bold;">Empezar mi trabajo</p>
                    </a> 
                </div>
 
                <div class="col-md-3">
                    <a href="{{route('words.chats')}}">
                        <img class="img-fluid mx-auto d-block h-50" src="{{asset("img/chat.png")}}"><br>
                        <p align="center" style="color: #4fafb2;font-weight: bold;">Chat tutor</p>  
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{route('avances.index')}}">
                     <img class="img-fluid mx-auto d-block h-50" src="{{asset("img/avances.png")}}"><br>
                     <p align="center" style="color: #4fafb2;font-weight: bold;">Avances y entregas</p> 
                    </a> 
                </div>
                <div class="col-md-3">
                    <a href="{{route('pagos.index')}}">
                        <img class="img-fluid mx-auto d-block h-50" src="{{asset("img/pago.png")}}"><br>
                        <p align="center" style="color: #4fafb2;font-weight: bold;">Pagos</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

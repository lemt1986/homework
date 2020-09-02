@extends('layouts.app_d')
 
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

            @if (session('mensaje'))
                        <div class="alert alert-success">
                            {{ session('mensaje') }}
                        </div>
                             @elseif(session('mensaje2'))     
                             <div class="alert alert-danger">
                               {{ session('mensaje1') }}
                             </div>                 
                    @endif 

            <div class="row">
                <div class="col-md-4">
                    <a href="{{route('exercises.index')}}"> 
                        <img class="img-fluid mx-auto d-block h-50" src="{{asset("img/ofert_doc.png")}}"><br>
                        <p align="center" style="color: #4fafb2;font-weight: bold;">Ofertas de trabajos</p>
                    </a> 
                    
                </div>
                <div class="col-md-4">
                    <a href="{{route('exercises.create')}}">
                        <img class="img-fluid mx-auto d-block h-50" src="{{asset("img/buzon.png")}}"><br>
                        <p align="center" style="color: #4fafb2;font-weight: bold;">Buzón de tareas</p>
                    </a> 
                    
                </div>
                <div class="col-md-4">
                    <a href="{{route('cuentas.index')}}">
                        <img class="img-fluid mx-auto d-block h-50" src="{{asset("img/retiro.png")}}"><br>
                        <p align="center" style="color: #4fafb2;font-weight: bold;"> Mi dinero </p>
                    </a> 
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

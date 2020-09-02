@extends('layouts.app')

@section('content')
<div class="container-fluid">
    
<div class="row">
    <div class="col-sm-11">
<div class="container">

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
        <div class="col-12">
        	<h1 class="display-3" style="color: #4fafb2;font-weight: bold;">Archivos</h1>   
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-6" style="color: #0bafb4;font-weight: bold;">
            Archivos    
            
        </div>
        <div class="col-md-6" style="color: #0bafb4;font-weight: bold;">Fecha</div>
    </div>
    @include('docentes.achivos.tabla.doc')
    
</div>
</div>
    <div class="col px-0 sticky-right" style="background-color: #d9d9d9;">
        <div class="my-3"><a href="{{route('words')}}" ><img class="w-75" src="{{asset("img/ejercicio.png")}}"></a></div>
        <div class="my-3"><a href="{{route('words.chats')}}"><img class="w-75" src="{{asset("img/chat.png")}}"></a></div>
        <div class="my-3" style="background-color: #c6c1c1"><img class="w-75" src="{{asset("img/avances.png")}}"></div>
        <div class="my-3"><a href="{{route('pagos.index')}}"><img class="w-75" src="{{asset("img/pago.png")}}"></a></div>
    </div>
</div>
</div>
@endsection

@extends('layouts.app_d')

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
        	<h1 class="display-3" style="color: #4fafb2;font-weight: bold;">Buzón de tareas</h1>
            
            
        </div>
    </div>
    @include('docentes.buzon.tabla.buzon')
</div>
</div>
    <div class="col px-0 sticky-right" style="background-color: #d9d9d9;">
        <div class="my-3"><a href="{{route('exercises.index')}}"><img class="w-75" src="{{asset("img/ofert_doc.png")}}"></a></div>
        <div class="my-3 w-100" style="background-color: #c6c1c1"><img class="w-75" src="{{asset("img/buzon.png")}}"></div>
        <div class="my-3"><a href="{{route('cuentas.index')}}"><img class="w-75" src="{{asset("img/retiro.png")}}"></a></div>
        
    </div>
</div>


@endsection

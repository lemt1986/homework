@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Administrador: {{ Auth::user()->name }} </div>

                <div class="card-body">
                    Bienvenido
                </div>
            </div> 

            @if (session('mensaje'))
                        <div class="alert alert-success">
                            {{ session('mensaje') }}
                        </div>
                             @elseif(session('mensaje2'))     
                             <div class="alert alert-danger">
                               {{ session('mensaje1') }}
                             </div>                 
                    @endif 
            <p class="display-3">Control Administrativo</p>

            <div class="row">
                <div class="col-md-3">
                    Docentes
                </div>
                <div class="col-md-3">
                    Alumnos
                </div>
                <div class="col-md-3">
                    Catera
                </div>
                <div class="col-md-3">
                    Trabajos
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    Mensajes
                </div>
                <div class="col-md-3">
                    Balance 
                </div>
                <div class="col-md-3">
                   <a href="{{route('words.create')}}">Areas de trabajos</a>
                </div>
                <div class="col-md-3">
                    
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection

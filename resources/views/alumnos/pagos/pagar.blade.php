@extends('layouts.app')

@section('content')

<div class="container-fluid">
    
    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                                         
                    @endif 
<div class="row">
    <div class="col-sm-11">
<div class="container">
   
    <div class="row justify-content-center">
        <div class="col-md-12">
            <p class="display-3" style="color: #4fafb2;font-weight: bold;">Pagos</p>

            <div class="row">
               
                <div class="col-md-2 mx-2" style="color: #4fafb2;font-weight: bold;">
                    Materia
                </div>
                <div class="col-md-3 mx-2" style="color: #4fafb2;font-weight: bold;">
                    Proyecto
                </div>
                <div class="col-md-2 mx-2" style="color: #4fafb2;font-weight: bold;">
                    Docente
                </div>
                <div class="col-md-2 mx-2" style="color: #4fafb2;font-weight: bold;">
                    Pagar
                </div>
                <div class="col-md-2 mx-2">
                    
                </div>
                
                
            </div>
            @foreach($exer as $exer)
             <div class="row">
               
                <div class="col-md-2 mx-2" style="color: #4fafb2;">
                    {{$exer->materia}}
                </div>
                <div class="col-md-3 mx-2" style=" color: #4fafb2;">
                    {{$exer->nombre_proyecto}}
                </div>
                <div class="col-md-2 mx-2" style="color: #4fafb2;">
                    {{$exer->name}}
                </div>
                <div class="col-md-2 mx-2" style="color: #4fafb2;">
                    {{$exer->ofert_fin}}
                </div>
                <div class="col-md-2 mx-2">
                   <form action="{{route('exercises.detal')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id_exer" value="{{$exer->id}}">
                        <input type="hidden" name="id_doc" value="{{$exer->teacher}}">
                        <input type="hidden" name="precio" value="{{$exer->ofert_fin}}">
                        <input type="hidden" name="fecha" value="{{$exer->fecha_entr}}">
                        <button type="submit" class="btn btn-warning">Aceptar</button>
                    </form>                      
                </div>
                
                
            </div>
            @endforeach
            
            <!-- Button trigger modal -->


        </div>
    </div>
</div>
</div>
<div class="col px-0 sticky-right" style="background-color: #d9d9d9;">
        <div class="my-3"><a href="{{route('words')}}" ><img class="w-75" src="{{asset("img/ejercicio.png")}}"></a></div>
        <div class="my-3"><a href="{{route('words.chats')}}"><img class="w-75" src="{{asset("img/chat.png")}}"></a></div>
        <div class="my-3" ><a href="{{route('avances.index')}}"><img class="w-75" src="{{asset("img/avances.png")}}"></a></div>
        <div class="my-3" style="background-color: #c6c1c1"><a href="{{route('pagos.index')}}"><img class="w-75" src="{{asset("img/pago.png")}}"></a></div>
    </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade modal-dialog modal-dialog-scrollable" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #6fafb4;">
        <h5 class="modal-title text-white" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="container">
        <div class="row container">
            <input type="text" name="" class="form-control col-md-8" id="exampleInputEmail1" aria-describedby="emailHelp">
            <button type="button" class="btn btn-primary col-md-4">Enviar</button>
        </div>
        
      </div>
    </div>
  </div>
</div>
@endsection

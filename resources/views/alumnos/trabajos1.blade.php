@extends('layouts.app')

@section('content')

<div class="container-fluid">
    
<div class="row">
    <div class="col-sm-11">
<div class="container">
    
    <div class="row">
        <div class="col-12">
            
            <h1 class="display-3" style="color: #4fafb2;font-weight: bold;">Elige a un Profesor</h1>
            
            @if($exercise == '[]')
           
            <h1 class="text-secondary display-3" class="" style="font-weight: bold;">Aún no hay búsquedas de docentes</h1>

            @else

           
            <form action="" method="POST">
  
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label" style="color: #4fafb2;font-weight: bold;">Tema </label>
                    <div class="col-sm-8">
                        <select class="form-control" id="exampleFormControlSelect1">
                            @foreach($exercise as $ex)
                            <option value="{{$ex->id}}">{{$ex->nombre_proyecto}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-primary mb-2">Buscar</button>
                    </div>
                </div>
            </form>
            
            
            
        </div>
    </div>
   
    
    

    @if ($doc == '[]')

    <h3 class="text-secondary">Estamos en la búsqueda de docentes</h3>
        @else
    @foreach($doc as $doc)
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4" style="color: #4fafb2;font-weight: bold;">Tarifa</div>
                <div class="col-md-4" style="color: #4fafb2;font-weight: bold;">Fecha de entrega</div>
                <div class="col-md-4"></div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4"><img src="{{asset("img/avatar.jpg")}}" alt="..." class="rounded-circle w-50"></div>
                <div class="col-md-8">
                    <div class="card bg-info" >
                        <div class="card-header text-white" style="background-color: #4fafb2;" align="cente">
                         <strong>{{$doc->name}}</strong>
                        </div>
                        <div class="card-body bg-white">
                            <p class="card-text" style="color: #4fafb2;">Años de experiencia:{{$doc->experiencia}} </p>
                            <p class="card-text" style="color:#4fafb2; ">Universidad de procedencia: {{$doc->univ}}</p>
                            <p class="card-text" style="color: #4fafb2;">{{$doc->resenia}}</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4"><input type="text" name="" value="{{$doc->precio}}" class="py-3" style="border-color: #51c3bc;border-radius: 10px;text-align: center;color:#4fafb2;" disabled></div>
                <div class="col-md-4"><input type="text" name="" value="{{$doc->fecha}}" class="py-3" style="border-color: #51c3bc;border-radius: 10px;text-align: center;color:#4fafb2;" disabled></div> 
                <div class="col-md-4">
                    <form action="{{route('exercises.detal')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id_exer" value="{{$doc->exer_id}}">
                        <input type="hidden" name="id_doc" value="{{$doc->teacher_id}}">
                        <input type="hidden" name="precio" value="{{$doc->precio}}">
                        <input type="hidden" name="fecha" value="{{$doc->fecha}}">
                        <button type="submit" class="btn btn-warning">Aceptar</button>
                    </form> 
                </div>
                    
            </div>
        </div>
    </div>
    <hr>            
         @endforeach  

        

@endif
@endif
</div>        
    </div> 
    <div class="col px-0 sticky-right" style="background-color: #d9d9d9;">
        <div class="my-3"><a href="{{route('words')}}" ><img class="w-75" src="{{asset("img/ejercicio.png")}}"></a></div>
        <div class="my-3 w-100" style="background-color: #c6c1c1"><img class="w-75" src="{{asset("img/chat.png")}}"></div>
        <div class="my-3"><a href="{{route('avances.index')}}"><img class="w-75" src="{{asset("img/avances.png")}}"></a></div>
        <div class="my-3"><a href="{{route('pagos.index')}}"><img class="w-75" src="{{asset("img/pago.png")}}"></a></div>
    </div>
</div>
</div>
@endsection

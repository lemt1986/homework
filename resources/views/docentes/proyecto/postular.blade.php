@extends('layouts.app_d')

@section('content')
<div class="container-fluid">
    
<div class="row">
    <div class="col-sm-11">
<div class="container">
    <div class="row">
        <div class="col-12">
          <h1 class="display-3" style="color: #4fafb2;font-weight: bold;">Detalle</h1>
            
        </div>
    </div>
    @foreach($exer as $exer)
    <div class="row">
      <div class="col-md-6">
        <p style="color: #4fafb2;"><strong style="color: #4fafb2;font-weight: bold;">Tipo de trabajo:</strong> {{$exer->area}}</p>
        <p style="color: #4fafb2;"><strong style="color: #4fafb2;font-weight: bold;">Año:</strong> {{$exer->ciclo}}</p>
        <p style="color: #4fafb2;"><strong style="color: #4fafb2;font-weight: bold;">Curso/materia:</strong> {{$exer->materia}}</p>
        <p style="color: #4fafb2;"><strong style="color: #4fafb2;font-weight: bold;">Tema:</strong> {{$exer->nombre_proyecto}}</p>
        <p style="color: #4fafb2;"><strong style="color: #4fafb2;font-weight: bold;">Fecha de entrega:</strong> {{$exer->fecha_entr}}</p>
        <p style="color: #4fafb2;"><strong style="color: #4fafb2;font-weight: bold;">Descripción del proyecto:</strong> {{$exer->descripcion}}</p>
      </div>
      <div class="col-md-6">
        <p style="color: #4fafb2;"><strong style="color: #4fafb2;font-weight: bold;">Número de páginas:</strong> {{$exer->n_pag}}</p>
        <p style="color: #4fafb2;"><strong style="color: #4fafb2;font-weight: bold;">Interlineado:</strong> {{$exer->interli}}</p>
        <p style="color: #4fafb2;"><strong style="color: #4fafb2;font-weight: bold;">Bibliografía:</strong> {{$exer->bibliografia}}</p>
        <p style="color: #4fafb2;"><strong style="color: #4fafb2;font-weight: bold;">Referencias:</strong> {{$exer->referencia}}</p>
      </div>
    </div>
    @endforeach
    

  
</div>
</div>
    <div class="col px-0 sticky-right" style="background-color: #d9d9d9;">
        <div class="my-3" style="background-color: #c6c1c1"><a href="" ><img class="w-75" src="{{asset("img/ofert_doc.png")}}"></a></div>
        <div class="my-3 w-100" ><a href="{{route('exercises.create')}}"><img class="w-75" src="{{asset("img/buzon.png")}}"></a></div>
        <div class="my-3"><a href="{{route('cuentas.index')}}"><img class="w-75" src="{{asset("img/retiro.png")}}"></a></div>
        
    </div>
</div>
</div>
@endsection
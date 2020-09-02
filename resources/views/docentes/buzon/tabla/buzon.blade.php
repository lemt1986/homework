<div class="row my-2">
	<div class="col" style="color: #0bafb4;font-weight: bold;">Tema/Trabajo</div>
	<div class="col" style="color: #0bafb4;font-weight: bold;">Tipo de trabajo</div>
	<div class="col" style="color: #0bafb4;font-weight: bold;">Avances/entregables</div>
	<div class="col" style="color: #0bafb4;font-weight: bold;"></div>
	<div class="col"></div>
	<div class="col" style="color: #0bafb4;font-weight: bold;">Progreso de pago</div>
</div>
@foreach($exer as $exer)
<div class="row my-2">
	<div class="col" style="color: #4fafb2;">{{$exer->nombre_proyecto}} - {{$exer->materia}}</div>
	<div class="col" style="color: #4fafb2;">{{$exer->area}}</div>
	<div class="col" style="color: #4fafb2;">
    
      <a href="{{route('subir.index', ['id_exer' => $exer->id])}}">Entregas</a>
     
  </div>
	<div class="col" style="color: #4fafb2;">
        <form action="{{route('exercises.create')}}" method="GET">
                        @csrf
            <input type="hidden" name="de" value="{{$exer->user_id}}">
            <button type="submit" style="color: #4fafb2;border: none">Chat</button>
        </form>
  </div>
	<div class="col" style="color: #4fafb2;"><a type="button" data-toggle="modal" data-target="#sub{{$exer->id}}">Subir Archivo</a></div>
	<div class="col" style="color: #4fafb2;">
		<div class="progress">
      @php
    //proceso para sacar el progreso
    
    $date = new DateTime(); 
    $fecha1= new DateTime($exer->fecha_entr);
    $fecha2= new DateTime($exer->updated_at);
    $diff = $fecha1->diff($fecha2);
    $diff2 = $fecha1->diff($date);
    $dia = $diff->days - $diff2->days;
    $por = ($dia*100)/$diff->days;
    
      @endphp
      <div class="progress-bar bg-warning" role="progressbar" style="width: {{$por}}%;" aria-valuenow="{{$por}}" aria-valuemin="0" aria-valuemax="100">{{number_format($por)}}%</div>
    </div>
	</div>
</div>

<!-- chat en tiempo real-->
            @if(isset($chat))

<ul class="list-group" style="position: fixed; bottom: 0px; right: 400px;">
  <li class="list-group-item active">
    @foreach($user as $user)
    {{$user->name}}
    @endforeach
  </li>
  <li class="list-group-item " style="height: 250px; overflow-y: scroll;" >
    @livewire("chat-list", ["teacher" => $user->id])
  </li>
  <li class="list-group-item">
    
    @livewire("chat-form", ["chat" => $exer])
    
  </li>
  
</ul>

@else
@endif
<!-- Modal de subir archivo-->
<div class="modal fade" id="sub{{$exer->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title text-white" id="exampleModalLabel">Sube tu archivo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('subir.store')}}" method="POST">
          @csrf
          <input type="file" name="archivo">
          <input type="hidden" name="exer_id" value="{{$exer->id}}">
          <input type="submit" value="Subir" class="btn btn-info">
        </form>
        
      </div>
      
    </div>
  </div>
</div>

@endforeach


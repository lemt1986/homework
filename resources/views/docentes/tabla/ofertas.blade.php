<div class="row my-3">
    <div class="col" style="color: #4fafb2;font-weight: bold;">Alumno</div>
    <div class="col"></div>
    <div class="col"></div>
    <div class="col" style="color: #4fafb2;font-weight: bold;">Fecha de entrega</div>
    <div class="col" style="color: #4fafb2;font-weight: bold;">Confirmar fecha</div>
    <div class="col" style="color: #4fafb2;font-weight: bold;">Tu tarifa</div>
    <div class="col" style="color: #4fafb2;font-weight: bold;">Usted recibirá</div>
    <div class="col"></div>

</div>
@foreach($exer as $exer)
<div class="row my-3">
    <di class="col-md-6">
        <div class="row">
            <div class="col-md-3 text-info"><img class="img-fluid w-25" src="{{asset("img/avatar.jpg")}}">{{$exer->name}}</div>
            <div class="col-md-3 text-info"><a href="{{route('exercises.ofert', ['id' => $exer->id])}}">Detalle</a></div>
            <div class="col-md-3 text-info"> <a href="../storage/app/{{$exer->archivo}}" download="tarea">Descargar tarea</a></div>
            <div class="col-md-3 text-info">{{$exer->fecha_entr}}</div>
        </div>
    </di>
    <di class="col-md-6">
        <form action="{{route('postulation.store')}}" method="POST">
        @csrf
            <input type="hidden" name="user_id" value="{{$exer->user_id}}">
            <input type="hidden" name="teacher_id" value="{{Auth::user()->id}}">
            <input type="hidden" name="exer_id" value="{{$exer->id}}">
            <input type="hidden" id="cod" value="{{Auth::user()->cod}}">
        <div class="row">
            <div class="col-md-4 text-info"><input type="date" name="fecha"  class="px-2 w-100" ></div>
            <div class="col-md-3 text-info mx-2">S/ <input type="text" id="valor" name="precio" class="w-75" onkeyUp="calcular();" ></div>
            <div class="col-md-2 text-info">S/ <span id="result" step=".01"></span></div>
            <div class="col-md-2 text-info"><button type="submit" class="btn btn-success mx-auto d-block ">ENVIAR</button></div> 
        </div>
        </form>
    </di>
</div>
 @endforeach
<script>
   function calcular(){
    //Obtienes el valor
  var valor = document.getElementById("valor").value;
  var cod = document.getElementById("cod").value;

  var result= document.getElementById('result');

  //le descuento para personas fuera de peru y lo agregas al HTML
  if (cod == +51) {
    var final = valor-((valor-((valor*3.99/100+1)*18%+(valor*3.99/100+1)))*25/100)-((valor*3.99/100+1)*18/100+(valor*3.99%+1))
  }else{
    var final = valor-((valor-((valor*5.4/100+0.3)))*25/100)-((valor*5.4/100+0.3));
  }
  //agrega los resultados al DOM
  result.innerHTML = final.toFixed(2);
   }
  

</script>
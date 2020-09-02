@extends('layouts.app')

@section('content')

<div class="container-fluid">
    
<div class="row">
    <div class="col-sm-11">
<div class="container">
    
    <div class="row">
        <div class="col-12">
            <h1 class="display-3" style="color: #4fafb2;font-weight: bold;">Detalle del servicio</h1>
        </div>
    </div>
    
    @foreach($exer as $exer)
    <div class="row">
        <div class="col-md-6">
            <h4 style="color: #4fafb2;font-weight: bold;">Detalle</h4>
            
             <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="border-color: #51c3bc;border-radius: 10px;color:#4fafb2;" disabled>
                 {{$exer->area}}
                 {{$exer->ciclo}}
                 {{$exer->materia}}
             </textarea>
             
             <h4 style="color: #4fafb2;font-weight: bold;">Fecha de entrega</h4>
             
             <input type="text" name="" value="{{$exer->fecha_entr}}" class="py-3" style="border-color: #51c3bc;border-radius: 10px;text-align: center;color:#4fafb2;" disabled>
            
        </div>
        <div class="col-md-6">
            <h4 style="color: #4fafb2;font-weight: bold;">¿Tienes código promocional?</h4>
            <input type="text" name="" value="" class="py-3" style="border-color: #51c3bc;border-radius: 10px;text-align: center;color:#4fafb2;" >

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-6 col-form-label" style="color: #4fafb2;font-weight: bold;">Subtotal</label>
                <div class="col-sm-6">
                   
                    <input class="form-control" id="valor" type="number"  value="{{$exer->ofert_fin}}" style="border-color: #51c3bc;border-radius: 10px;text-align: center;color:#4fafb2;" disabled onkeyUp="calcular();">
                    
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-6 col-form-label" style="color: #4fafb2;">*Descuento</label>
                <div class="col-sm-6">
                    10%
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-6 col-form-label" style="color: #4fafb2;font-weight: bold;">Total a pagar</label>
                <div class="col-sm-6">

                    <span class="form-control" id="result1" style="border-color: #51c3bc;border-radius: 10px;text-align: center;color:#4fafb2;"></span>
                    
                </div>
            </div>
            
        </div>
    </div>
    <div> 
      @if(auth::user()->cod == '+51') 
        <form action="{{route('pay')}}" method="POST">
            @csrf
            <input type="hidden" name="precio" value="{{$exer->ofert_fin}}">
            <input type="hidden" name="id" value="{{$exer->id}}">
            <button type="submit" class="btn btn-warning mb-2 float-right">Pagar mercado pago</button>
        </form>
        @else
        <form action="{{route('paypal/pay')}}" method="POST">
            @csrf
            <input type="hidden" name="precio" value="{{$exer->ofert_fin}}">
            <input type="hidden" name="id" value="{{$exer->id}}">
            <button type="submit" class="btn btn-warning mb-2 float-right">Pagar paypal</button>
        </form>
        @endif
    </div>
    @endforeach
         

</div>        
    </div>
    <div class="col px-0 sticky-right" style="background-color: #d9d9d9;">
        <div class="my-3"><a href="{{route('words')}}" ><img class="w-75" src="{{asset("img/ejercicio.png")}}"></a></div>
        <div class="my-3 w-100" ><a href="{{route('words.chats')}}"><img class="w-75" src="{{asset("img/chat.png")}}"></a></div>
        <div class="my-3"><a href="{{route('avances.index')}}"><img class="w-75" src="{{asset("img/avances.png")}}"></a></div>
        <div class="my-3" style="background-color: #c6c1c1"><img class="w-75" src="{{asset("img/pago.png")}}"></div>
    </div>
</div>
</div>
<script>
   
  //Obtienes el valor
  var valor = document.getElementById("valor").value;

  var result= document.getElementById('result');

  //le descuentas el 8% y lo agregas al HTML
  var descuento = valor - (parseInt(valor)*0.10) ;

  //agrega los resultados al DOM
  result.innerHTML = descuento;

</script>

@endsection

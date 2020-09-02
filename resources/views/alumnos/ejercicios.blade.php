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
                             @elseif(session('mensaje1'))     
                             <div class="alert alert-danger">
                               {{ session('mensaje1') }}
                             </div>                 
                    @endif 
    <div class="row justify-content-center">
        <div class="col-md-12">
            <p class="display-3" style="color: #4fafb2;font-weight: bold;">¿Qué tipo de trabajo necesito?</p>

            <div class="row">
                @foreach($words as $word)
                <div class="col-md-3">
                    <a href="{{route('words.show', $word->id)}}">
                        <img class="img-fluid mx-auto d-block h-50" src="../storage/app/{{$word->img}}"><br>
                        <p align="center" style="color: #4fafb2;font-weight: bold;">{{$word->word}}</p>
                    </a>
                </div>
                @endforeach
                
            </div>
            
        </div>
    </div>
</div>
</div>
<div class="col px-0 sticky-right" style="background-color: #d9d9d9;">
        <div class="my-3" style="background-color: #c6c1c1"><a href="#" ><img class="w-75" src="{{asset("img/ejercicio.png")}}"></a></div>
        <div class="my-3"><a href="{{route('words.chats')}}"><img class="w-75" src="{{asset("img/chat.png")}}"></a></div>
        <div class="my-3"><a href="{{route('avances.index')}}"><img class="w-75" src="{{asset("img/avances.png")}}"></a></div>
        <div class="my-3"><a href="{{route('pagos.index')}}"><img class="w-75" src="{{asset("img/pago.png")}}"></a></div>
    </div>
</div>
</div>
@endsection

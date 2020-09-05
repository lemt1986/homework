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
            <p class="display-3" style="color: #4fafb2;font-weight: bold;">Avances y entregas</p>

            <div class="row">

                <div class="col-md-4 mx-2" style="color: #4fafb2;font-weight: bold;">
                    Tema/Trabajo
                </div>
                <div class="col-md-3 mx-2" style="color: #4fafb2;font-weight: bold;">
                    Materia
                </div>
                <div class="col-md-1 mx-2">

                </div>
                <div class="col-md-1 mx-2">

                </div>
                <div class="col-md-2 mx-2">

                </div>


            </div>
            @foreach($exer as $exer)
             <div class="row">

                <div class="col-md-4 mx-2" style="background-color: #6fafb4; color: white;font-weight: bold; border-radius:10px; border-radius:10px; ">
                    {{$exer->nombre_proyecto}}
                </div>
                <div class="col-md-3 mx-2" style="background-color: #d9d9d9; color: #4fafb2;font-weight: bold;border-radius:10px; border-radius:10px; ">
                    {{$exer->materia}}
                </div>
                <div class="col-md-1 mx-2" style="background-color: #d9e022;border-radius:10px; border-radius:10px; ">
                    <a href="{{route('subir.index', ['id_exer' => $exer->id])}}">Descargar</a>
                </div>
                <div class="col-md-1 mx-2" style="background-color: #d5d5d5;color: #4fafb2;font-weight: bold;border-radius:10px; border-radius:10px;">

                    <form action="{{route('chat.chat')}}" method="POST">
                        @csrf
                        <input type="hidden" name="teacher" value="$exer->teacher">
                         <button type="submit">Chat</button>
                    </form>


                </div>
                <div class="col-md-2 mx-2">
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

            @endforeach

            <!-- Button trigger modal -->



        </div>
    </div>
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
<p></p>
<!-- chat en tiempo real-->

    @if(isset($chat))

    @else
@endif



@endsection

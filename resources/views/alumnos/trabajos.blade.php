@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    @foreach($words as $word)
                    <li class="breadcrumb-item {{$loop-> first? 'active': '0'}}" aria-current="page"><a  href="{{route('words.proyect', ['id' => $word->id])}}" >{{$word->word}}</a></li>
                    
                    @endforeach
                    </ol>
            </nav>
            
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            @if($id == 3)
                @include('alumnos.tabla.exercise')
                @elseif($id == 4)
                @elseif($id == 5)
                @elseif($id == 6)
                @elseif($id == 7)
                @elseif($id == 8)
                @elseif($id == 9)
                @else
                @include('alumnos.tabla.clase')
            @endif
        </div>
    </div>

</div>
@endsection

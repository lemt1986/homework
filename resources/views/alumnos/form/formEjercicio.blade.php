@extends('layouts.app')

@section('content')
<div class="jumbotron" style="background-color:#d9e022;">
    <h2 class="display-3" style="font-weight: bold;color: #4fafb2;">{{$word->word}}</h2>
</div>

@if($word->id == 3)
@include('alumnos.form.exercise')
@elseif($word->id == 10)
@include('alumnos.form.chat')
@endif
@endsection 

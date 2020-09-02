@extends('layouts.app')

@section('content')
<div class="container mt-5">
    
    <form action="{{route('words.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Imagen</label>
            <div class="col-sm-8">
                <div class="custom-file">
                    <input type="file" name="img" class="custom-file-input" id="customFile" required>
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
         </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label">Nombre</label>
            <div class="col-sm-8">
             <input type="text" class="form-control" id="inputPassword" name="word" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label">Ruta</label>
            <div class="col-sm-8">
             <input type="text" class="form-control" id="inputPassword" name="ruta" required>
            </div>
        </div>
        <div class="form-group row">
                <div class="col ">
                    <button type="submit" class="btn btn-primary mx-auto d-block">Crear</button>
                </div>
        </div>
    </form>
</div>
@endsection

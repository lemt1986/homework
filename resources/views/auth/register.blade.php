@extends('layouts.app_ini')

@section('contentido')
<section style="background-color: #4fcdcc;">
<div class="container py-5">
    <form method="POST" action="{{ route('register') }}">
                        @csrf
    <div class="row justify-content-center">
        
        <div class="col-md-6">
            <div class="card" style="border-radius: 15px;">

                <div class="card-body">
                    <h2 align="center" style="color: #d9e022;"><strong>REGISTRO</strong></h2>
                    

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre/Alias</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="background-color: #14a6af; text-align: center; color: white; font-size: 4vh;">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style="background-color: #14a6af; text-align: center; color: white; font-size: 4vh;">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="celular" class="col-md-4 col-form-label text-md-right">Celular</label>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col"><input type="text" name="cod" id="cod" class="form-control" ></div>
                                    <div class="col-md-8"><input id="celular" type="celular" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') }}" required autocomplete="tel" style="background-color: #14a6af; text-align: center; color: white; font-size: 3vh;"></div>
                                </div>
                                
                                

                                @error('tel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" style="background-color: #14a6af; text-align: center; color: white; font-size: 4vh;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" style="background-color: #14a6af; text-align: center; color: white; font-size: 4vh;">
                            </div>
                        </div>

                        
                   
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color:#d9e022; ">
                                    <strong>GUARDAR</strong>
                                </button>
                            </div>
                        </div>
        </div>
        
    </div></form>
</div>
</section>

<script src="https://code.jquery.com/jquery-latest.js"></script>
<script>
var requestUrl = "https://ipapi.co/json/";

$.ajax({
  url: requestUrl,
  type: 'GET',
  success: function(json)
  {
    var json = json.country_calling_code;

    document.getElementById("cod").value = json;
  },
  error: function(err)
  {
    console.log("Request failed, error= " + err);
  }
}); 
</script>
@endsection

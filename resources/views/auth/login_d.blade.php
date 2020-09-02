@extends('layouts.app_ini')

@section('contentido')
<section style="background-color: #4fcdcc;">
    <div class="container">
                @if (session('mensaje'))
                        <div class="alert alert-success">
                            {{ session('mensaje') }}
                        </div>
                             @elseif(session('mensaje2'))     
                             <div class="alert alert-danger">
                               {{ session('mensaje1') }}
                             </div>                 
                    @endif 
            </div> 
    <div class="container py-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border-radius: 15px;">
                
                <div class="card-body" >
                    <img src="{{asset("img/Logo_2.png")}}" class="mx-auto d-block img-fluid w-25">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row w-50 mx-auto">
                            <h4 for="email" class="text-md-right mx-auto" style="color: #348fa9;"><strong>Usuario</strong></h4>

                            <div class="col-md-12 ">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="background-color: #14a6af; text-align: center; color: white; font-size: 4vh;">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row w-50 mx-auto">
                            <h4 for="password" class="text-md-right mx-auto" style="color: #348fa9;"> <strong>Contraseña</strong></h4>

                            <div class="col-md-12 ">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="background-color: #14a6af; text-align: center; color: white; font-size: 4vh;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row w-50 mx-auto">
                            <div class="col-md-12" align="center">
                                <button type="submit" class="btn" style="color: #d9e022;">
                                    <h2 align="center"><strong>INGRESAR</strong></h2>
                                </button>

                            </div>
                        </div>
                    </form>
                        <div class="form-group row w-50 mx-auto">
                            <div class="col-md-12 offset-md-4">
                                
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                         Olvide mi contraseña
                                    </a>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row mb-0 mx-auto">
                            <div class="col-md-12" align="center">
                                <form action="{{route('register_docente')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="bandera" id="result">
                                    <button type="submit" style="color: #14a6af;background-color: transparent;border: none;">
                                   <h3><strong>¿No tienes una cuenta? Registrate</strong></h3> 
                                    </button>
                                </form>
                                

                            </div>
                        </div>
                        
                    
                </div>
            </div>
        </div>
    </div>
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
    var json = json.country_code;
    
    document.getElementById("result").value = json.toLowerCase();

  },
  error: function(err)
  {
    console.log("Request failed, error= " + err);
  }
}); 
</script>

@endsection

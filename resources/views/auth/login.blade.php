@extends('layouts.app_ini')

@section('contentido')
<section style="background-color: #4fcdcc;">
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
                                <a href="{{ route('register') }}" class="btn" style="color: #14a6af;">
                                   <h2><strong>¿No tienes una cuenta? Registrate</strong></h2> 
                                </a>

                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection

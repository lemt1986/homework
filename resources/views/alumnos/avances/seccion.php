@if(isset($chat))

<div class="btn-group dropup" style="position: fixed; bottom: 0px; right: 400px;">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset("img/avatar.jpg")}}" class="img-fluid rounded-circle" style="width: 10vh;">
    @foreach($user as $user)
    {{$user->name}}
    @endforeach
  </button>
  
    <div class="dropdown-menu" style="width: 500px; padding-top: 0px;">

        <a class="dropdown-item bg-info text-white" href="#"> <img src="{{asset("img/avatar.jpg")}}" class="img-fluid rounded-circle" style="width: 10vh;"> - {{$user->name}}</a>
            @foreach($chat as $chat)
        <div class="dropdown-item row">
            @if($chat->send == Auth::user()->id)
            <div class="col">
                <div class="alert alert-success w-75" role="alert">
                {{$chat->message}}
                </div>
            </div>
            @else
            <div class="col" align="right">
                <div class="alert alert-dark w-75" role="alert">
                {{$chat->message}}
                </div>
            </div>
            @endif
        </div>
        @endforeach
        <div class="dropdown-divider"></div>
        <div class="dropdown-item">
            <form action="{{route('message.store')}}" method="POST">
                    @csrf
            <div class="input-group mb-3">
                
                    <input type="hidden" name="para" value="{{$user->id}}">
                    <input type="text" class="form-control" name="message" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                    <button class="btn btn-outline-info" type="submit" id="button-addon2">Enviar</button>
                
                    </div>
                
            </div>
            </form>
        </div>
    </div>

</div>
<div class="mt-3">

    <div class="card">        
        <div class="card-body"></p>
             @foreach($mensajes as $mensaje)        
                <div>

                    @if($mensaje->send != $usuario)
                        @if($mensaje->usuario != $teacher)
                        @else
                        <div class="alert alert-warning h-50" style="margin-right: 50px;">
                            <br><span class="text-muted">{{$mensaje->mensaje}}</span>
                        </div>
                        @endif
                    @else

                        <div class="alert alert-success h-50" style="margin-left: 50px;">
                            <br><span class="text-muted">{{$mensaje->mensaje}}</span>
                        </div>
                    @endif
                    
                </div>        
            @endforeach 
        </div>
    </div>    

    <script>
        
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
  
        var pusher = new Pusher('{{env('PUSHER_APP_KEY')}}', {
            cluster: '{{env('PUSHER_APP_CLUSTER')}}',
            forceTLS: true
        });
        
        var channel = pusher.subscribe('chat-channel');
        
        channel.bind('chat-event', function(data) {  
         window.livewire.emit('mensajeRecibido', data);
        });
        
        //setTimeout(function(){ window.livewire.emit('solicitaUsuario'); }, 100);
    </script>

</div>

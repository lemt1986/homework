<div class="">

     <input type="hidden" 
            wire:model="usuario" 
            class="form-control"  
            id="usuario" 
             
            >
            <input type="hidden" 
            wire:model="teacher" 
            class="form-control"   
            id="teacher" 
            >

     <div style="position: absolute;"
            class="alert alert-success collapse" 
            role="alert" 
            id="avisoSuccess"       
            >Se ha enviado
    </div> 

    <input type="text" class="form-control" 
            wire:model="mensaje" 
            wire:keydown.enter="enviarMensaje" 
            aria-label="Recipient's username" 
            aria-describedby="button-addon2"
            id="mensaje"
            placeholder="Escribe tu mensaje">

    <div class="input-group-append">
        <button class="btn btn-outline-info" 
                wire:click="enviarMensaje"
                wire:loading.attr="disabled"
                wire:offline.attr="disabled" 
                id="button-addon2">Enviar</button>
                
    </div> 
    
        <script>
                 
        // Esto lo recibimos en JS cuando lo emite el componente
        // El evento "enviadoOK"
         
  //window.document.getElementById("usuario").value = valor;

           document.addEventListener ( 'livewire: available' , function ( ) {
             window.livewire.on('enviadoOK', function () {
                $("#avisoSuccess").fadeIn("slow");                
                setTimeout(function(){ $("#avisoSuccess").fadeOut("slow"); }, 3000);                                
            });
         } ) ; 
        
        
    </script>    
</div>
    
   


@extends('layouts.app')

@section('content')


           <div class="container">

                <h1 class="mt-3" style="color: #4fafb2;font-weight: bold;">Hola, {{Auth::user()->name}}</h1>

                <h2 style="color: #4fafb2;">Por favor ingresa tu consulta</h2>
                <form action="{{route('soporte.store')}}" method="POST">
                  @csrf
                    <textarea class="form-control" name="mensaje" id="exampleFormControlTextarea1" rows="5"></textarea>
                    <button type="submit" class="btn btn-warning mx-auto d-flex mt-3 text-white"><strong>ENVIAR</strong></button>
                </form>
                
           </div>
       </section>
      
      <!-- Modal mal-->
<div class="modal fade" id="bien" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" >
    <div class="modal-content mt-5 bg-warning px-3" style="border-radius: 20px; ">
      <div class="" align="center">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          
        </button>
      </div>
      <div class="modal-body mx-auto ">
        <h1 class="text-info" align="center">En la brevedad posible estaremos respondiendo su consulta.</h1>
      </div>
      <div class="">
        
      </div> 
    </div>
  </div>
</div>     
       <script>
        
          $( document ).ready(function() {
                                 $('#bien').modal();
                                setTimeout(function(){ $("#bien").modal('hide'); },5000)
                              });
        
                            
                              
        </script>
       <!--sesion de servicio-->
      
@endsection
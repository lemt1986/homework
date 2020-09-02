<form action="{{route('retiros.store')}}" method="POST">
        @csrf
<div class="row my-4">
	<div class="col-md-6">
		 <div class="form-group">
    		<label for="exampleFormControlInput1" style="color: #4fafb2;font-weight: bold;">Tu dinero disponible</label>
        
          @if($bal == '[]')
            
    		  <input type="text" class="form-control" id="exampleFormControlInput1" value="s/ 0.00" disabled>
           @else
            @foreach($bal as $bal)
          <input type="text" class="form-control" id="exampleFormControlInput1" value="s/ {{number_format( $bal->balance, 2, '.', '')}}" disabled>
             @endforeach
          @endif
        
  		</div>
      
      <div class="form-group">
        <label for="exampleFormControlInput1" style="color: #4fafb2;font-weight: bold;">¿Cuánto quieres retirar?</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="retiro">
      </div>
     
  		
	</div>
	<div class="col-md-6">
		<div class="card">
  			<div class="card-header text-white" style="background-color: #4fafb2;">
    			Historial de pagos
  			</div>
  			<div class="card-body">
    			
  			</div>
		</div>
	</div>
	
</div>
<div class="row">
		<div class="col-md-12"><button tipe="submit" class="btn btn-info mx-auto d-block">Siguiente</button></div>
</div>

</form>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <p class="display-4" style="font-weight: bold;color: #4fafb2;">Reservar sesión</p>

      <form action="{{route('clases.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4" style="font-weight: bold;color: #4fafb2;">¿A qué facultad/área perteneces?</label>
            <select class="custom-select custom-select-lg mb-3" name="facultad">
              @foreach($areas as $area)
              <option value="{{$area->id}}">{{$area->area}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4" style="font-weight: bold;color: #4fafb2;">Fecha de entrega</label>
            <input type="date" class="form-control" id="inputPassword4" name="fecha_entr" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4" style="font-weight: bold;color: #4fafb2;">Ciclo / Año</label>
            <input type="text" class="form-control" id="inputEmail4" name="ciclo" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4" style="font-weight: bold;color: #4fafb2;">Hora</label>
            <input type="text" class="form-control" id="inputEmail4" name="hora" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4" style="font-weight: bold;color: #4fafb2;">Mencionar el curso</label>
            <input type="text" class="form-control" id="inputEmail4" name="materia" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4" style="font-weight: bold;color: #4fafb2;">Adjuntar archivo</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile" name="archivo" required>
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4" style="font-weight: bold;color: #4fafb2;">Mencionar el tema</label>
            <input type="text" class="form-control" id="inputEmail4" name="frecuencia" placeholder="Frecuencia" required>
          </div>
          <div class="form-group col-md-6">
            <button type="submit" class="btn btn-primary mx-auto d-block">Enviar Solicitud</button>
          </div>

        </div>

      </form>


    </div>
  </div>
</div>

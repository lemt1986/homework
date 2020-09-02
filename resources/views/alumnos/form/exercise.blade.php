<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <p class="display-4" style="font-weight: bold;color: #4fafb2;">Mi solicitud</p>

      <form action="{{route('exercises.store')}}" method="POST" enctype="multipart/form-data">
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
            <label for="inputPassword4" style="font-weight: bold;color: #4fafb2;">Adjuntar archivo</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile" name="archivo" required>
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4" style="font-weight: bold;color: #4fafb2;">Mencionar el curso</label>
            <input type="text" class="form-control" id="inputEmail4" name="materia" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4" style="font-weight: bold;color: #4fafb2;">Forma de pago del proyecto / tarea</label>
            <select class="custom-select custom-select-lg mb-3" name="f_pagos">
              
              <option value="Completo">Completo</option>
              <option value="2_Cuota">2 Cuota</option>
              
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4" style="font-weight: bold;color: #4fafb2;">Mencionar el nombre de su proyecto/tarea</label>
            <input type="text" class="form-control" id="inputEmail4" name="nombre_proyecto" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4" style="font-weight: bold;color: #4fafb2;">Descripción del proyecto / tarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion" required></textarea>
          </div>

        </div>

        <p style="font-weight: bold;color: #4fafb2;">En el caso que necesites calcular el número de páginas en base a un número de palabras, primero selecciona el interlineado deseado y después divide el número total de palabras por página. Por ejemplo, si tu trabajo debe tener 6000 palabras y el interlineado es de 1.5 sería 410 palabras por página, entonces 6000 palabras totales /410 palabras por página = 15 páginas.</p>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4" style="font-weight: bold;color: #4fafb2;">Número de páginas</label>
            <input type="text" class="form-control" id="inputEmail4" name="n_pag" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4" style="font-weight: bold;color: #4fafb2;">Bibliografía</label>
            <select class="custom-select custom-select-lg mb-3" name="bibliografia">

              <option value="no se requiere">no se requiere</option>
              <option value="Harvard">Harvard</option>
              <option value="Vancouver">Vancouver</option>
              <option value="Otro tipo">Otro tipo</option>

            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4" style="font-weight: bold;color: #4fafb2;">Interlineado</label>
            <select class="custom-select custom-select-lg mb-3" name="interli">

              <option value="Sencillo">Sencillo</option>
              <option value="1.5">1.5</option>
              <option value="Doble">Doble</option>

            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4" style="font-weight: bold;color: #4fafb2;">Referencias</label>
            <select class="custom-select custom-select-lg mb-3" name="referencia">

              <option value="Ninguna">Ninguna</option>
              <option value="1 a 5">1 a 5</option>
              <option value="6 a 10">6 a 10</option>
              <option value="11 a 15">11 a 15</option>
              <option value="16 a 20">16 a 20</option>
              <option value="21 a 30">21 a 30</option>
              <option value="31 a 45">31 a 45</option>
              <option value="mas de 45">mas de 45</option>

            </select>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mx-auto d-block">Enviar Solicitud</button>
      </form>

    </div>
  </div>
</div>

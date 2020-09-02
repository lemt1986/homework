<form action="{{route('cuentas.store')}}" method="POST">
	@csrf
<div class="jumbotron">
  
  <div class="form-group">
    <label for="formGroupExampleInput">Nombre y apellidos del titular</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="name" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Banco</label>
    <select class="custom-select" name="banco" id="validationDefault04" required>
        
        <option value="BANCO CONTINENTAL">BANCO CONTINENTAL</option>
        <option value="BANCO DE COMERCIO">BANCO DE COMERCIO</option>
        <option value="BANCO DE CREDITO">BANCO DE CREDITO</option>
        <option value="BANCO DE LA NACION">BANCO DE LA NACION</option>
        <option value="BANCO DEL TRABAJO">BANCO DEL TRABAJO</option>
        <option value="BANCO FINANCIERO">BANCO FINANCIERO</option>
        <option value="BANCO INTERAMERICANO">BANCO INTERAMERICANO</option>
        <option value="BNP PARIBAS">BNP PARIBAS</option>
        <option value="CAJA MUNICIPAL AREQUIPA">CAJA MUNICIPAL AREQUIPA</option>
        <option value="CAJA MUNICIPAL PIURA">CAJA MUNICIPAL PIURA</option>
        <option value="CITIBANK">CITIBANK</option>
        <option value="HSBC">HSBC</option>
        <option value="INTERBANCK">INTERBANCK</option>
        <option value="MI BANCO">MI BANCO</option>
        <option value="SANTANDER PERU">SANTANDER PERU</option>
        <option value="SCOTIABANK">SCOTIABANK</option>
        
      </select>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Número de cuenta</label>
    <input type="text" class="form-control" name="n_cuenta" id="formGroupExampleInput" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">TIpo de cuenta</label>
    <select class="custom-select" name="tipo" id="validationDefault04" required>
        <option value="Cuenta de Ahorro">Cuenta de Ahorro</option>
        <option value="Cuenta Corriente">Cuenta Corriente</option>
      </select>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">CCI</label>
    <input type="text" class="form-control" name="CCI" id="formGroupExampleInput" >
  </div>

</div>

<div class="float-right">
	<button tipe="submit" class="btn">Volver</button>
	<button tipe="submit" class="btn btn-info">Continuar</button>
</div>
</form>
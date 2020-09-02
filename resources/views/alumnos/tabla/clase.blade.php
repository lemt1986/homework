<p style="color: #4fafb2;font-weight: bold;">Clases virtuales</p>
 <table class="table">
        <thead class="thead-dark">
                    <tr>
                    <th scope="col">Materia</th>
                    <th scope="col">Ciclo</th>
                    <th scope="col">Postulados</th>
                    <th scope="col">Accion</th>
                    </tr>
        </thead>
        <tbody>
                    @foreach($clase as $clase)
                    <tr>
                        <th scope="row">{{$clase->materia}}</th>
                        <td>{{$clase->ciclo}}</td>
                        <td></td>
                        <td>
                            <a href="">Ver</a>
                        </td>
                    </tr>
                    @endforeach
        </tbody>
</table>
      
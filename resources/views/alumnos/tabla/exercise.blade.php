<p style="color: #4fafb2;font-weight: bold;">Resolución de ejercicios</p>
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
                    @foreach($exercise as $exer)
                    <tr>
                        <th scope="row">{{$exer->materia}}</th>
                        <td>{{$exer->ciclo}}</td>
                        <td></td>
                        <td> 
                            <a href="{{route('exercises.show', $exer->id)}}">Ver</a>
                        </td>
                    </tr>
                    @endforeach
        </tbody>
</table>
      
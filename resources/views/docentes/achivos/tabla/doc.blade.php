@foreach($arc as $arc)
    <div class="row">
        <div class="col-md-6">
            <a href="../storage/app/{{$arc->archivo}}" download="tarea" style="color: #4fafb2;font-weight: bold;">Archivo</a>   
            
        </div>
        <div class="col-md-6">{{$arc->created_at}}</div>
    </div>
    @endforeach
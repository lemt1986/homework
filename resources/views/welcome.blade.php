@extends('layouts.app_ini')

@section('contentido')
     
       <section style="background-color: #4fcdcc;">
           <div class="container">
               <div class="row pt-4">
                   <div class="col-md-6 animate__animated animate__backInLeft h-50" style="background-color: white;border-radius: 20px;">
                       <img src="{{asset("img/logo_3.png")}}" class="mx-auto d-block img-fluid mt-3 w-50">
                       <h2 align="center" style="color: #348fa9;">¿Necesitas ayuda en los trabajos que te exige la Universidad?</h2>
                       <div class="row mx-auto my-5">
                        <div class="col "><a href="{{ route('login') }}" class="btn py-2 mx-2 text-white w-100 h-100 zoom" style="background-color: #0aa3ad;"  ><h4><img class="img-fluid w-25" style="height: 7vh;" src="{{asset("img/alumno.png")}}">  <strong>ALUMNO</strong></h4> </a></div>
                        <div class="col"><a href="{{ route('docente') }}" class="btn py-2 mx-2 text-white w-100 h-100 zoom" style="background-color: #d9e022; "><h4><img class="img-fluid w-25" style="height: 7vh;" src="{{asset("img/docente.png")}}">  <strong>DOCENTE</strong></h4> </a></div>
                           
                       </div>
                       
                   </div>
                   <div class="col-md-6 animate__animated animate__backInRight ">
                       <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                         <div class="carousel-inner">
                           <div class="carousel-item active">
                              <img src="{{asset("img/A1.png")}}" class="d-block" style="height: 80vh;" alt="...">
                           </div>
                           <div class="carousel-item">
                             <img src="{{asset("img/A2.png")}}" class="d-block" style="height: 80vh;" alt="...">
                           </div>
                          <div class="carousel-item">
                             <img src="{{asset("img/A3.png")}}" class="d-block" style="height: 80vh;" alt="...">
                          </div>
                         </div>
                       </div>
                       
                   </div>
               </div>
           </div>
       </section>
       <!--sesion de servicio-->
       <section>
           <div class="container">
               <div class="row my-5">
                   <div class="col-md-4 zoom">
                       <h1 align="center" style="color: #348fa9;"><strong>Calidad</strong></h1>
                       <p align="center" class="animate__animated animate__backInLeft" >Nos aseguramos que se cumpla con las pautas establecidas, entrega a tiempo y originalidad en tu trabajo.</p>
                       <div><img src="{{asset("img/bien.png")}}" class="img-fluid mx-auto d-block"></div>
                   </div>
                   <div class="col-md-4 zoom">
                       <h1 align="center" style="color: #348fa9;"><strong>Satisfacción</strong></h1>
                        <p align="center">Brindamos el mejor servicio y la plena tranquilidad de contar con un equipo y soporte profesional que estará siempre apoyandote.</p>
                        <div><img src="{{asset("img/lista.png")}}" class="img-fluid mx-auto d-block"></div>
                   </div>
                   <div class="col-md-4 zoom">
                       <h1 align="center" style="color: #348fa9;"><strong>Confidencialidad</strong></h1>
                       <p align="center">Cada usuario maneja su propia cuenta y el proceso es absolutamente confidencial. Puedes confiar en nuestro servicio. </p><br><br>
                       <div><img src="{{asset("img/100.png")}}" class="img-fluid mx-auto d-block"></div>
                   </div>
               </div>
           </div>
       </section>
       <footer style="background-color: #d9e022;">
        <div class="container">
            <div class="row py-2">
               <div class="col-md-4"><h3 class="text-info"><img class="img-fluid" style="height: 7vh;" src="{{asset("img/face.png")}}">Homework Station</h3></div>
               <div class="col-md-8"><h3 class="text-info" align="right">Privacidad   Condiciones   Preferencias</h3></div>
           </div>
        </div>
           
       </footer>
@endsection
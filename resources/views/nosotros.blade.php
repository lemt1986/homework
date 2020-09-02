@extends('layouts.app_ini')

@section('contentido')
     
       <section style="background-color: #4fcdcc;">
           <div class="container">
               <div class="row pt-4">
                   <div class="col">
                     <img src="{{asset('img/img.png')}}">
                   </div>
               </div>
           </div>
       </section>
       <section>
        <div class="container">
             <h1><strong>Nosotros</strong></h1>

            <p>Somos un equipo de profesionales que estará siempre a tu disposición para ayudarte en esas materias o trabajos difíciles de la Universidad. Olvídate de esas largas horas frente a la computadora, intentando saber por donde deberías empezar.</p>
            <p>Ahora podrás cumplir con las exigencias de las tareas sin descuidar otras obligaciones.</p>
        </div>
            

       </section>
       <section>
        <div class="container">
            <h1><strong>Preguntas Frecuentes</strong></h1>

          <h2><strong>Si tengo algún inconveniente ¿ A dónde debo comunicarme?</strong></h2>

          <p>Si presentas alguna dificultad técnica o de otro tipo, sólo debes dejar un mensaje al área de soporte explicando tu dificultad. Nos pondremos en contacto contigo lo antes posible.</p>
        
          <h2><strong>¿En cuánto tiempo obtendré respuesta a mi solicitud de tareas?</strong></h2>
          <p>En un plazo no mayor a 24 horas nuestros profesionales estarán respondiendo tu solicitud.</p>

          <h2><strong>¿Cuál es la garantía de que realmente recibiré un trabajo original?</strong></h2>

          <p>Todo material de trabajo es exclusivo, usted podrá solicitar los avances de su tarea o proyecto y verificar que todo se esté cumpliendo a cabalidad.</p>

          <h2><strong>¿Podré elegir al profesional?</strong></h2>

          <p>Sí, recibirás diferentes propuestas de profesionales y podrás elegir la que más te convenga.</p>

          <h2><strong>¿Ofrecen ayuda en todo tipo de materia y curso?</strong></h2>
          <p>Sí, ofrecemos ayuda en todo tipo de proyecto y curso. Desde resolución de ejercicios simples hasta asesoramiento o elaboración de Trabajos de Maestría.</p>
        </div>

       </section>
       <footer style="background-color: #d9e022;">
        <div class="container">
            <div class="row py-2">
               <div class="col-md-6 d-flex align-items-center"><h3 class="text-info"><img class="img-fluid w-50 " style="" src="{{asset("img/Logo_1.png")}}"></h3>
               </div>
               <div class="col-md-6" align="center">
                  <h3 class="text-info" align="right">contacto@homework-station.com</h3><br>
                  <i class="fab fa-facebook-square mx-2 fa-4x"></i><i class="fab fa-instagram mx-2 fa-4x"></i><i class="fab fa-twitter-square mx-2 fa-4x"></i>
                  
               </div>
           </div>
        </div>
           
       </footer>
       <!--sesion de servicio-->
      
@endsection
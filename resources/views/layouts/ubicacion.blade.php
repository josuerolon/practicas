<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="icon/css/all.css">
        
        <link rel="stylesheet" href="css/ubicacion.css">
        
        

        
    </head>
    <body>
         @include('componets.header')
   
        
          @include('componets.navbar') 
        
  <!-- 1 --><div class="container1">
              <div class="container-img">  
                 <img src="Img/ubicacion.jpeg" alt="Fundacion-Rizzuto">
                 <div class="texto-cont1">
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque corrupti repellendus minus deleniti officiis vitae numquam quaerat reiciendis, eum? Sed nam deserunt, iusto sint mollitia, sequi voluptatibus odio cupiditate architecto.</p>

                   <button class="evento">Fechas de Eventos</button>
                 </div>
                
              </div>    

         <!-- 1 --></div>   



         




          <div class="container3">

            <div class="titulo-cont3">
              <h2 class="h2-cont3"><strong><i>Eventos de Caridad</i></strong></h2>


            </div>

           <!-- 1 --><div class="contenido1-inf">
                      <img src="Img/Evento.jpeg" alt="Fiesta Marival" class="img-fluid">
                    
             
           <!-- 1 --></div>
          
          <!--2--><div class="contenido-txt1">
           <p class="inf1-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi praesentium, vero accusamus ex hic, veniam unde. Repellendus, a ea illum harum eaque odit iste fugiat cum dignissimos molestias, libero labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, sit aliquid? Dicta esse quasi quod libero, ipsa nam earum porro perspiciatis et quia vel mollitia tempore consequuntur. Incidunt corrupti, harum?</p>
          <!--2--></div>



           <!-- 2 --><div class="contenido2-inf" >
            <img src="Img/fiesta-marival.jpeg" alt="Fiesta Marival" class="img-fluid">

            <!-- 2 --></div>

                  <div class="contenido-txt2">
           <p class="inf2-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi praesentium, vero accusamus ex hic, veniam unde. Repellendus, a ea illum harum eaque odit iste fugiat cum dignissimos molestias, libero labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, sit aliquid? Dicta esse quasi quod libero, ipsa nam earum porro perspiciatis et quia vel mollitia tempore consequuntur. Incidunt corrupti, harum?</p>
          
             
           <!-- 2 --></div>



           <!-- 3 --><div class="contenido3-inf">
                       <img src="Img/Evento.jpeg" alt="Fiesta Marival" class="img-fluid">
             
           <!-- 3 --></div>

           <div class="contenido-txt3">
           <p class="inf3-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi praesentium, vero accusamus ex hic, veniam unde. Repellendus, a ea illum harum eaque odit iste fugiat cum dignissimos molestias, libero labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, sit aliquid? Dicta esse quasi quod libero, ipsa nam earum porro perspiciatis et quia vel mollitia tempore consequuntur. Incidunt corrupti, harum?</p>
          <!-- 2 --></div>

            
               <div class="titulo-ubicacion">
              <h2 class="h2-ubicacion"><strong><i>Ubicacion</i></strong></h2>
              <div class="mapa">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7463.987714819604!2d-105.3007682465782!3d20.71047404125217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842146b80722d69f%3A0x6dcd6e360db88018!2sMarival%20Emotions%20Resort%20%26%20Suites!5e0!3m2!1ses-419!2smx!4v1620319940544!5m2!1ses-419!2smx" width="1000" height="700" style="border:4px solid #000;" allowfullscreen="" loading="lazy"></iframe>
                </div>

            </div>

             
           

           @include('componets.footer')
          
          

         <!-- Fin Container --></div>
            

    

    </body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</html>

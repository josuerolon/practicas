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
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/vision.css">
        <link rel="stylesheet" href="css/biografia.css">
        

        
    </head>
    <body>
         @include('componets.header')
   
        
          @include('componets.navbar') 
        
        <!-- 1 --><div class="container1">
             <!-- 1 --><div class="">
  
      <div class="container-img">
       
      <img src="Img/fundacion.jpeg" alt="Fundacion-Rizzuto">

      
      </div>

      

  <!-- 1--></div>

         <!-- 1 --></div>   



         <!-- 1 --><div class="container2">
                    <h2 class="biografia"><strong>Pietro Rizzuto</strong></h2>
          
            <p class="texto1">Pietro Rizzuto
            La semilla que da origen a la Fundación, fue sembrada hace poco más de tres décadas por un hombre que con una gran visión, con una gran sensibilidad humana y compromiso social que decidió hacer realidad su sueño de participar, de compartir con los menos favorecidos socialmente, los beneficios que el trabajo de todos puede generar a través de empresas e instituciones socialmente comprometidas con el entorno social en el que interactúan.</p>

            <p class="texto2">Quien plantó dicha semilla fue el Senador Pietro Rizzuto, hombre de trabajo diario con grandes valores y principios que lo impulsaron a confiar en la gente, a buscar apoyar a quien solicitaba su ayuda. En reconocimiento a su ejemplo, a su labor incansable y como una forma segura de dar continuidad a sus acciones, en Agosto de 2014 se crea la Fundación Senador Pietro Rizzuto, a través de la cual se emprenden acciones en las que se permitan coordinar los esfuerzos de personas, empresas e instituciones para generar beneficios que lleguen de forma segura y adecuada, a la mayor cantidad de personas posibles, buscando aportar beneficios a largo plazo a quienes se pueda apoyar con esta misión.</p>

            <div class="biografia-img">
            <img src="Img/biografia.jpeg" alt="Logo">
            </div>
         
         <!-- 1 --></div> 

       



         
             
            </div>

           @include('componets.footer')
          
          

         <!-- Fin Container --></div>
            

    

    </body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</html>

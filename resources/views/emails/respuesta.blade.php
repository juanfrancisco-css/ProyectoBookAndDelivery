<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book&Delivery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<style>
 .box2{
       
       padding:3%;
     
     
   }
   .box2 p{
       padding-bottom:-1%;
       text-align:center;
       font-size:9px;
   }
   section{
        padding:3%;
        text-align:center;
    }

    .content{
      text-align:left;
      
     
    }

    .content span{
      font-weight:bolder;
    }
   
</style>
</head>
  <body class="container p-2">
    <section>
  
   <div class="content">
  <p ><strong> Estimado/a {{ $contacto->nombre }}  </strong></p>
<p>¡Gracias por ponerse en contacto con nosotros! <p>
<p>Estamos encantados de responder a sus consultas y proporcionarle la información que necesita. 
Respecto al asunto  <strong>" {{ $contacto->asunto }} " </strong> que usted nos ha comunicado la respuesta en la siguiente:
  </p>
  <p>
{{ $contacto->mensaje}}
  </p>
  <p>
Si tiene alguna otra pregunta o requiere más información, no dude en hacérnoslo saber. Estamos aquí para ayudarle en todo lo que podamos.
Agradecemos su interés en nuestro restaurante y esperamos tener la oportunidad de atenderle pronto. Le invitamos a realizar una reserva en caso de que desee visitarnos y disfrutar de nuestra oferta culinaria.
  </p>
<p>¡Saludos cordiales!</p>
<p> Encargado  del restaurante Juan Francisco Rojas.</p>
<p>Si la duda persiste o quiere comunicarse directamente con nosotros llamenos al  <span>603859487</span>.
  
  </div>

<hr>
   <div class="box2">
<p>Por favor no responder a este email</p>
<p>Si tienes alguna pregunta o algún comentario sobre el servicio o el pago, ponte en contacto con  <a href="{{ route('index')}}">Book&Delivery</a>.</p>
</div>  
</section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>

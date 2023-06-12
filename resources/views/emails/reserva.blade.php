<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book&Delivery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<style>
    h1{
        padding-bottom:2%;
    }
    section{
        padding:3%;
    }
    .box{
        padding:3%;
        box-shadow: 1px 2px 9px black;
    }
    .box2{
       
        padding:3%;
      
      
    }
    .box2 p{
        padding-bottom:-1%;
        text-align:center;
        font-size:8px;
    }
    table td{
     padding-left:4%;
    }
</style>
</head>
  <body class="container p-2">
    <section>
  <h1>Tu reserva en Book&Delivery esta confirmada </h1>
  <div class="box">
<h3>Detalles de la Reserva</h3>
<div class="container text-center">
  <table>
    <tr>
    <td>
    <p><i class="bi bi-calendar-check"></i> Reserva: 
   <span class="content"> {{ $reserva->fecha }} a las  {{ $reserva->hora }}</span></p>
  </td>
    <td>
    <p><i class="bi bi-people-fill"></i> Personas : 
    <span class="content">{{ $reserva->comensales }}</span></p> 
  </td>
  </tr>

  <tr>
    <td>
    <p><i class="bi bi-geo-alt-fill"></i> Dir:
   <span class="content">Calle empedrada 25,28042 </span></p>
  </td>
    <td>
    <p><i class="bi bi-person"></i> A nombre de :  <span class="content">{{ $reserva->nombre }}</span> </p>
  </td>
  </tr>
    <tr>
      <td>
    <p><i class="bi bi-telephone-fill"></i>  Telf:
   <span class="content"> {{ $reserva->telefono }}</span></p>
  </td>
  </tr>
  @if(!$reserva->confirmada)
    <tr>
      <td>
    <p>  Pulsa en el siguiente botón para confirmar la reserva:
  <a href="{{ route('reserva-confirmar').'/'.$reserva->token }}" class="btn btn-info">Confirmar</a></p>
  </td>
  </tr>
@endif

  </table>
<hr>
   <div class="box2">
<p>Si tienes alguna pregunta o algún comentario sobre el servicio o el pago, ponte en contacto con  <a href="{{ route('index')}}">Book&Delivery</a>.</p>
<p>Si tienes alguna pregunta o algún comentario sobre la experiencia de reserva, ponte en contacto con Reserva con Google.</p>
<p>Te hemos enviado este correo electrónico obligatorio porque estás utilizando Reserva con Google.</p>
<p>© 2020 Google LLC.</p>
<p>Google LLC. 1600 Amphitheatre Parkway, Mountain View, CA 94043, Estados Unidos.</p>
</div>  
</section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>

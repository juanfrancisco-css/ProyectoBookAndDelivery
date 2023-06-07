<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title>BookAndDelivery</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <!--boostrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  
  <!-- boostrap icon-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  
  <style>
/*Primer hijo de la tabla  */
 table tr td:first-child{
    background-image: url("images/use1.jpg"); /* The image used */
  background-color: #f1eded; /* Used if the image is unavailable */
  height: 379px; /* You must set a specified height */
  width: 379px;
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */

}

table tr td:nth-child(2){
   /* background-image: url("pizz.jpg"); /* The image used */
  background-color: #fafafa; /* Used if the image is unavailable */
  height: 379px; /* You must set a specified height */
  width: 379px;
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
}
table tr td:nth-child(3){
    background-image: url("images/use2.png"); /* The image used */
  background-color: #cccccc; /* Used if the image is unavailable */
  height: 379px; /* You must set a specified height */
  width: 379px;
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
}

table tr td:nth-child(4){
    background-image: url(""); /* The image used */
  background-color: #ffffff; /* Used if the image is unavailable */
  height: 379px; /* You must set a specified height */
  width: 379px;
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
}


table tr:nth-child(2) td:first-child{
    background-image: url(""); /* The image used */
  background-color: #ffffff; /* Used if the image is unavailable */
  height: 379px; /* You must set a specified height */
  width: 379px;
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
}
table tr:nth-child(2) td:first-child a{
    color:rgb(20, 20, 19);
    font-weight: lighter;
    font-style: italic;
}

table tr:nth-child(2) td:nth-child(2){
    background-image: url("images/use3.png"); /* The image used */
  background-color: #cccccc; /* Used if the image is unavailable */
  height: 379px; /* You must set a specified height */
  width: 379px;
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
}

table tr:nth-child(2) td:nth-child(3){
    background-image: url(""); /* The image used */
  background-color: #ffffff; /* Used if the image is unavailable */
  height: 379px; /* You must set a specified height */
  width: 379px;
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
 
}
table tr:nth-child(2) td:nth-child(3) a{
    color:rgb(20, 20, 19);
    font-weight: lighter;
    font-style: italic;
}
table tr:nth-child(2) td:nth-child(4){
    background-image: url(""); /* The image used */
  background-color: #cccccc; /* Used if the image is unavailable */
  height: 379px; /* You must set a specified height */
  width: 379px;
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
}

table a{
    color:black;
    text-decoration: none;
    font-weight: bolder;
    font-size: 30px;
}

table{
   
  padding: 10px;
  box-shadow: 3px 10px 10px #888888;
  margin-left:14%;
  margin-bottom:3%;
}
 
  </style>
</head>

<body onload="cargar()">

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    @include('menu.navegacion')
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                    Pide lo que te pida el cuerpo
                    </h1>
                    <p >
                   Reserva tu mesa o haz tu pedido y te lo llevamos a casa
                  </p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          
         
        </div>
        
      </div>

    </section>
    <!-- end slider section -->
  </div>


  
  <!-- offer section -->

  @include('modulos.ofertas')

  <!-- end offer section -->

  
<!-- section contentido -->


<!-- section content2 -->
<table>
        <tr>
            <td class="rounded text-center" >
               <!---<a href="#" > Satisfacción garantizada en cada bocado</a>-->
               
            </td>
            <td class="rounded text-center">
                <a href="#" >  Satisfacción garantizada en cada bocado</a>
<br>
                <a  href=" {{ route('carta') }} " class="btn btn-outline-warning col-6 mt-3">Ver la Carta</a>
            </td>
            <td class="rounded text-center">
              <!--- <a href="">Descubre el equilibrio perfecto entre sabor y salud en nuestras ensaladas</a>-->
            </td>
           <!--- <td class="rounded"> </td>-->
        </tr>
        <tr>
            <td class="rounded text-center">
                <a href="">Encuentra el lugar perfecto para disfrutar con tus amigos en nuestro establecimiento</a>
                <br>
                <a href="{{ route('reserva-paso1')}}" class="btn btn-warning col-6 mt-4">Reservar</a>
            </td>
            <td class="rounded text-center">
               <!--- <a href="#" >Sabores auténticos que te harán regresar por más</a>-->
            </td>
            <td class="rounded text-center">
                <a href="">Tu opinión nos importa. Contáctanos y cuéntanos cómo podemos ayudarte.</a>
                <a href="{{ route('contacto-create')}}" class="btn btn-warning col-6 mt-4">Contáctanos</a>
            </td>
              <!--- <td class="rounded"> </td>-->
        </tr>
    </table>
<!-- fin --->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contactanos
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Calle General Ricardos
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  Book&DeliveryFood@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Redes Sociales
            </a>
            
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"><img src="images/facebook.png" alt="" width="25"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"><img src="images/twitter.png" alt="" width="25"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"><img src="images/linkedin.png" alt="" width="25"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"><img src="images/instagram.png" alt="" width="25"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"><img src="images/pinterest.png" alt="" width="25"></i>
              </a>
            </div>
          </div>
        </div>
       
  
        <div class="col-md-4 footer-col">
          <h4>
           Condiciones Legales
          </h4>
          <div>
            <p> <span >Condiciones de Cookies</span></p>
            <p> <span>Politica de Privacidad</span></p>
             <p>Aviso Legal</p>
             <p>Declaración de accesibilidad</p>
          </div>
        </div>
      </div>
      
    </div>
  </footer>

  
  <!-- footer section -->


</body>

</html>
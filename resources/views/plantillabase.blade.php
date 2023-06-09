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
  <!-- estilos del  calendario-->
 <link href="{{ asset('css/calendario.css') }}" rel="stylesheet">
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />



  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  
  <!--boostrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  
<!-- boostrap icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">



</head>

<body class="sub_page">

<div class="hero_area">
    <div class="bg-box">
      <img src="images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    @include('menu.navegacion')
    <!-- end header section -->
  </div>

         @yield('content')

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

<!-- calendario javascript-->
<script src="js/calendario.js"></script>


</body>

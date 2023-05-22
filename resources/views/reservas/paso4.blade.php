
@extends('plantillabase')
@section('content')
<section class="book_section layout_padding">

    <div class="container">
  
      <div class="heading_container w-40 box1" >
<?php
if(isset($_REQUEST['OK3'])){
   
    ?>
<form action="{{ route('cancelar') }}" method="post">
    @csrf

    <?php
if (preg_match('/^[a-zA-Z\s]+$/',$_REQUEST['nombre']) && ctype_digit($_REQUEST['telefono']) ){
   echo '<div class="alert alert-secondary" role="alert">
   <i class="bi bi-info-circle"></i> Revisa los datos de la reserva  !
 </div>';
}
else{
    echo '<div class="alert alert-danger" role="alert">
    Lo sentimos pero los datos de vuestra reserva estan incorrectos!
   </div>';
}
   
    echo '<div class="card text-left p-5">
    <div class="card-header">
    <i class="bi bi-info-circle"></i> Detalles de la Reserva
    </div>
    <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text"> <i class="bi bi-calendar"></i>'. $_REQUEST['fecha'] .
                     '<br> <i class="bi bi-people"></i> '.$_REQUEST['NumPersonas'] . 'personas<br>
                     <i class="bi bi-clock"></i> '.$_REQUEST['hora'] .'<br>';
                     if (preg_match('/^[a-zA-Z\s]+$/',$_REQUEST['nombre']) && ctype_digit($_REQUEST['telefono']) ){
                        echo '
                        <i class="bi bi-person" ></i> '.$_REQUEST['nombre'] .'<br>
                        <i class="bi bi-telephone " ></i> '.$_REQUEST['telefono'] .'<br>
                        ';
                     }
                     else{
                        echo '
                        <span style=color:red; ><i class="bi bi-person" ></i> '.$_REQUEST['nombre'] .'</span><br>
                        <span style=color:red; > <i class="bi bi-telephone" ></i> '.$_REQUEST['telefono'] .'</span><br>
                        ';
                     }
                    
                     echo '<i class="bi bi-envelope-at"></i> '.$_REQUEST['email'] .'<br>
    
    </p>
   
    </div>
    ';
    ?>

<?php
    echo '
    <div class="card-footer text-body-secondary">
    <input type="submit" class="btn btn-danger"  value="Cancelar">
    ';
    ?>
</form>
<form action="{{ route('reserva-paso5') }}" method="post">
@csrf
    <?php
    
if (preg_match('/^[a-zA-Z\s]+$/',$_REQUEST['nombre']) && ctype_digit($_REQUEST['telefono']) ) {

    echo '<input type="submit" class="btn btn-primary" name="ENVIAR" value="Confirmar Reserva">';
} else {
    echo '<input type="submit" class="btn btn-primary" name="ENVIAR" value="Confirmar Reserva" disabled>';
}
   echo '
    </div>
    </div>';
    
    echo '<input type="hidden" name="fecha" value="'.$_REQUEST['fecha'].'"><br>';
    echo '<input type="hidden" name="NumPersonas" value="'.$_REQUEST['NumPersonas'].'">';
    echo ' <input type="hidden"   name="hora" value="'.$_REQUEST['hora'].'"   readonly >';
    echo '<input type="hidden" name="nombre" value="'.$_REQUEST['nombre'].'"><br>';
    echo '<input type="hidden" name="telefono" value="'.$_REQUEST['telefono'].'">';
    echo ' <input type="hidden"   name="email" value="'.$_REQUEST['email'].'"   readonly >';
    
    echo '</form >';
    }
    ?>
    </div>
</div>
</section>
    @endsection

@extends('plantillabase')
 @section('content')
 <section class="book_section layout_padding">

    <div class="container">
  
      <div class="heading_container" >
      <h4><i class="bi bi-3-circle"></i> Paso  </h4>
<?php
if(isset($_REQUEST['OK2'])){

    ?>
<form action="{{ route('cancelar') }}" method="post">
    @csrf
<?php
if(isset($_REQUEST['hora']) &&  $_REQUEST['hora'] =="" ){

    echo '<div class="alert alert-danger" role="alert">
    Debes de Elegir una hora valida  <i class="bi bi-clock"></i>

   
  </div>';
}
echo '<div class="card w-5">
<div class="card-body">
  <h5 class="card-title">Datos de la Reserva</h5>
  <p class="card-text"> <i class="bi bi-calendar"></i> '. $_REQUEST['fecha'] .
                     '<br> <i class="bi bi-people"></i> '.$_REQUEST['NumPersonas'] . 'personas<br>
                     <i class="bi bi-clock"></i>  '.$_REQUEST['hora'] .'<br>
                     <input type="submit" class="btn btn-secondary" value="Modificar">
  </p>
 
</div>
</div>';

?>
</form>
<form action="{{ route('reserva-paso4') }}" method="post">
    @csrf
<?php
echo '<input type="hidden" name="fecha" value="'.$_REQUEST['fecha'].'"><br>';
echo '<input type="hidden" name="NumPersonas" value="'.$_REQUEST['NumPersonas'].'">';
echo ' <input type="hidden"   name="hora" value="'.$_REQUEST['hora'].'"   readonly >';

?>
<div class="input-group mb-3">
<span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
<input type="text" class="form-control"  id="nombre"  name="nombre" placeholder=" Nombre"  <?php  if(isset($_REQUEST['hora']) &&  $_REQUEST['hora'] !="" ) echo "required" ?>>
</div>
<div class="input-group mb-3">
<span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone"></i></span>
<input type="text" class="form-control"  id="telefono" name="telefono"  placeholder="Telefono " <?php  if(isset($_REQUEST['hora']) &&  $_REQUEST['hora'] !="" ) echo "required" ?>>
</div>
<div class="input-group mb-3">
<span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope-at"></i></span>
<input type="email" class="form-control"   id="email" name="email"  placeholder="Email "  <?php  if(isset($_REQUEST['hora']) &&  $_REQUEST['hora'] !="" ) echo "required" ?>>
</div>
<input type="submit" name="OK3" class="btn btn-primary" value="Confirmar" <?php if(isset($_REQUEST['hora']) &&  $_REQUEST['hora'] =="" ) echo "disabled" ?>>
</form>


<?php


}

?>
</div>
</div>
</section>
@endsection
@extends('plantillabase')
 @section('content')
 <section class="book_section layout_padding">

    <div class="container">
  
      <div class="heading_container" >
<!-- inicio-->
<h4><i class="bi bi-2-circle"></i> Paso  </h4>
<?php
if(isset($_REQUEST['RETURN2']) || isset($_REQUEST['OK'])){

if(isset($_REQUEST['fecha']) &&  $_REQUEST['fecha'] =="" ){

    echo '<div class="alert alert-danger" role="alert">
    Debes de Elegir una fecha valida <i class="bi bi-calendar"></i>
  </div>';
}

?>
<form action=" {{ route('cancelar') }}" method="post">
@csrf
<?php


echo '<div class="card w-4">
<div class="card-body">
  <h5 class="card-title">Datos de la Reserva</h5>
  <p class="card-text"> <i class="bi bi-calendar"></i>  '. $_REQUEST['fecha'] .
                     '<br> <i class="bi bi-people"></i>  '.$_REQUEST['NumPersonas'] . 'personas
  
  </p>
  <input type="submit" class="btn btn-secondary"  value="Modificar">
</div>
</div>';

?>
</form>
<form action=" {{ route('reserva-paso3') }}" method="post">
@csrf
<?php
echo '<input type="hidden" name="fecha" value="'.$_REQUEST['fecha'].'"><br>';
echo '<input type="hidden" name="NumPersonas" value="'.$_REQUEST['NumPersonas'].'">';

?>
<div class="input-group mb-3">
<span class="input-group-text" id="basic-addon1"><i class="bi bi-clock"></i></span>
<input type="text" class="form-control col-5"  placeholder="Elige una hora" name="hora" id="hora"  readonly required>
</div>
<!--
<input type="text"  id="hora" class="form-control form-reservas-input" placeholder="Elige una hora" name="hora"   aria-describedby="addon-wrapping" readonly required>
-->
<?php

$servename="localhost";
$username="root";
$password="";
$ddname="proyectobookanddelivery";

$con= new mysqli($servename,$username,$password,$ddname);
if($con->connect_error){
die("Error al conectarse");
}

//Cuantas mesas hay en tu local
$mesas_disponibles=1;
$horario=array('10:30','11:00','11:30','12:00','12:35','13:05','13:35',
'14:00','14:30','15:00','15:30','16:00','16:30'
,'17:00','17:35','18:05','18:35','19:00','19:35'
,'20:05','20:35','21:00','21:30','22:00','22:30','23:00');

$meses =array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Nomviembre','Diciembre');
$test4 = array();
$hora_dispoble=false;
$h="";




        for($k=1;$k<=31;$k++){//dia
            for($j=0;$j<count($meses);$j++){//meses
    
        $sql=" select hora ,count(*) ,fecha from reservas where fecha= '".$k." ".$meses[$j]." 2023' ;";

        $result=$con->query($sql);
$cont=0;
$cont_horas=0;
        if($result->num_rows >= $mesas_disponibles){

            while($row= $result->fetch_assoc()){
            
              
                //si hay mas mesas que reservas (12 mesas)
                if($row['count(*)'] >=12){

                    
                    $test4[] = $row['fecha'];


                    

                  

                    $cont_horas++;

                    $cont++;
                }
                
              
            }
        }
    }
}


$test5=array();
$cont=0;
for($i=0;$i<count($test4);$i++){
$sql=" select hora  from reservas where fecha= '".$test4[$i]."' ;";
//echo $sql."<br>";
$result=$con->query($sql);
while($row= $result->fetch_assoc()){
    $test5[$test4[$i]][] = substr( $row['hora'], 0, -3);

    $cont++;
}

}

$fechaRequerida="21 Mayo 2023";
$HoraNoDisponible=array();
foreach ($test5 as $fecha => $horas){

if($_REQUEST['fecha']==$fecha){
 
    foreach ($horas as $hora) {
    

        $HoraNoDisponible[]=$hora;
    }
}


}


$new=[];
foreach($horario as $item) {
if(!in_array($item, $HoraNoDisponible)) {
    $new[] =$item;
}
}
$horario=$new;

//print_r($horario);
echo "<div class='box-fecha'>";
$cont=0;
for($i=0;$i<count($horario);$i++){
$id='hora_'.$i;
if($cont<27){

        ?>
          
           
             <input type="button" class="btn btn-outline-dark btn-hora " value="<?php echo $horario[$i] ?>" id="<?php echo $id ?>" class="form-control" aria-describedby="addon-wrapping" onclick="hora_('<?php echo $horario[$i] ?>')">
        <?php 
             
           
            

            
}

$cont++;

}
echo "</div>";
?>
<br>
<input type="submit" name="OK2" class="btn btn-primary" value="Continuar" <?php if(isset($_REQUEST['fecha']) &&  $_REQUEST['fecha'] =="" ) echo "disabled" ?>>
</form>

<?php
}


?>
</div> 

<!-- fin -->
</div>
</div>
</section>
@endsection
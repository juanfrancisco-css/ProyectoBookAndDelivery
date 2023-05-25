 
 @extends('admin.plantillabase2')
 @section('content')
<!-- book section -->
<section class="book_section layout_padding">

    <div class="container">
  
      <div class="heading_container" >

    <!-- Si el usuario esta autenticado -->
      @auth
        <a class="btn btn-secondary" href="{{ route('reserva-index') }} "><i class="bi bi-info-circle"></i></a>  
       @endauth
    <!-- fin -->
        <h1 >Reserva tu Mesa</h1>
      <p>  <span>Book&Delivery (Madrid)</span></p>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">

   <!-- mensajes de exitos o de error-->       
@if (session('success'))
    <h6 class="alert alert-success">{{session('success')}}</h6>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <p>Por favor, corrige los siguientes errores:</p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <!-- fin -->         
<form action=" {{ route('reserva-store') }} " method="post" >
@csrf
              <div>
                <input type="text" class="form-control" id="nombre"  name="nombre"  value="{{ old('nombre') }}" placeholder=" Nombre" />
              </div>
              <div>
                <input type="text" class="form-control" id="telefono" name="telefono" value="{{ old('telefono') }}" placeholder="Telefono "  />
              </div>
              <div>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Email " />
              </div>
             
              <!-- Numero de personas -->
                <div class="mb-3">
                <select  id="NumPersonas" class="form-control"  name="NumPersonas">
                <?php 
                        for($i=1;$i<=8;$i++){
                            if($i==2){
                                echo '<option value="'.$i.'" selected >'.$i . ' personas</option>';
                            }
                            else if($i==1){
                                echo '<option value="'.$i.'"  >'.$i . ' persona</option>';
                            }
                            else{
                                echo '<option value="'.$i.'"  >'.$i . ' personas</option>';
                            }

                        }
                ?>
                </select>
                </div>
              <!-- fin -->
              <div>
                <input type="text" class="form-control"  placeholder="Selecione una fecha del calendario" name="fecha"  id="fecha_select" readonly required>
              </div>
<!-- Horas-->
              <div>
                Elige una hora  : <br>
              <input type="text"  id="hora" class="form-control form-reservas-input" placeholder="Elige una hora" name="hora"   aria-describedby="addon-wrapping" readonly required>
         
<?php
$servename="localhost";
$username="root";
$password="";
$ddname="proyectobookanddelivery";

$con= new mysqli($servename,$username,$password,$ddname);
if($con->connect_error){
    die("Error al conectarse");
}

//$hora=array();
$mesas_disponibles=1;
$hora=array('10:30','11:00','11:30','12:00','12:35','13:05','13:35',
'14:00','14:30','15:00','15:30','16:00','16:30'
,'17:00','17:35','18:05','18:35','19:00','19:35'
,'20:05','20:35','21:00','21:30','22:00','22:30','23:00');

$hora_dispoble=false;
$h="";
for($i=10;$i<24;$i++){
    $sql=" select hora ,count(*) from reservas where hora like '".$i.":%';";
    $result=$con->query($sql);
    
    if($result->num_rows > 0){
    
        while($row= $result->fetch_assoc()){
        
          

            //hay tres  mesas y han reservado .... 
            if($row['count(*)']<$mesas_disponibles){
                $hora_dispoble=true;
                


            }
            else{
              $h.=  substr( $row['hora'], 0, -3) .",";
               // $h.= $row['hora'].",";
            }
        }
    }
}


 $arr_hora= explode(',',$h);//lo convierto a array
 $arr_hora=array_filter($arr_hora);//eliminar los espacios en blanco
 /****************************************elimino los que sean iguales */
 $new=[];
 
 foreach($hora as $item) {
    if(!in_array($item, $arr_hora)) {
        $new[] =$item;
    }
}
/*********************************************************fin */
$hora=$new;
$cont=0;
for($i=0;$i<count($hora);$i++){
    $id='hora_'.$i;
    if($cont<27){
    
            ?>
              
               
                 <input type="button" class="btn btn-primary btn-hora " value="<?php echo $hora[$i] ?>" id="<?php echo $id ?>" class="form-control" aria-describedby="addon-wrapping" onclick="hora_('<?php echo $hora[$i] ?>')">
            <?php 
                 
               
                
    
                
    }
 
    $cont++;

    }
    ?>
<!--fin horas-->
  </div>
  <!-- fin -->


              <div class="btn_box">
                <button type="submit" class="btn btn-primary">Reservar </button>
               
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
            <!-- Calendario -->
          <div class="map_container container-calendar ">
              <div class="calendar"></div>
          </div>
           <!-- fin -->
        </div>
      </div>
    </div>


  </section>
  <!-- end book section -->
  @endsection
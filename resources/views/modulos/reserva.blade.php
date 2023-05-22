 
 @extends('plantillabase')
 @section('content')
<!-- book section -->
<section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Reservas 
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" class="form-control" id="nombre"  name="nombre" placeholder=" Nombre" />
              </div>
              <div>
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono "  />
              </div>
              <div>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email " />
              </div>
             
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
              <div>
                <input type="text" class="form-control" name="fecha"  id="fecha_select" readonly required>
              </div>

              <div>
              <input type="text"  id="hora" class="form-control form-reservas-input" name="hora"   aria-describedby="addon-wrapping" readonly required>
              
<?php
$hora=array('9:30','9:45','10:00','10:30','10:45','11:00','11:15',
'11:30','11:45','12:00','12:15','12:35','12:50'
,'13:15','13:35','13:55','14:15','14:35','14:55'
,'15:15','15:45','16:00');




echo "<tr>";
$cont=0;
  for($i=0;$i<count($hora);$i++){
    $id='hora'.$i;

    if($cont<6){
     // $cont=0;
  
    ?>
      
     <td> 
      <input type="button"  class="btn btn-primary btn-hora" value=" <?php echo $hora[$i] ?>" id="<?php echo $id ?>" class="form-control"    aria-describedby="addon-wrapping"  onclick="hora_('<?php echo $hora[$i] ?>')">
     </td>
 
    <?php

 
    }
    $cont++;
    }
    echo "</tr>";
    
   



?>
</table>
            
            </div>


              <div class="btn_box">
                <button>
                  Reservar
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container ">
          
            <!-- Calendario -->
  <div class="calendar container-calendar"></div>
<!-- fin -->
          </div>
        </div>
      </div>

     

    </div>


  </section>
  <!-- end book section -->
  @endsection
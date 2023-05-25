
@extends('plantillabase')
 @section('content')

<!-- inicio-->
<section class="book_section layout_padding">

    <div class="container">
  
      <div class="heading_container box1" >


<h1 class="m-3 pl-5">Reserva tu Mesa </h1>
<h4><i class="bi bi-1-circle"></i> Paso  </h4>
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
<?php

?>
<form action="{{ route('reserva-paso2') }}" method="post">
@csrf
<table>
  <tr>
    <td>
<select  id="NumPersonas" class="form-control form-select-mb mb-1 "  name="NumPersonas" required >
                <?php 
                        for($i=1;$i<=8;$i++){
                        if(!isset($_REQUEST['NumPersonas'])){

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
                        else{
                            if($_REQUEST['NumPersonas'] == $i){
                                echo '<option value="'.$i.'" selected >'.$i . ' personas</option>';
                            }
                            else{
                                echo '<option value="'.$i.'"  >'.$i . ' personas</option>';
                            }
                        }
                            
                        }
                ?>
</select>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="bi bi-calendar-check"></i></span>
  <input type="text" class="form-control"  placeholder="Selecione una fecha del calendario" name="fecha"  id="fecha_select" readonly required>
</div>
                      </td>
                      </tr>
                      <tr>
                      <td>
                        <!--
   <div class="map_container container-calendar"></div>
                    -->
    <div class="calendar"  style="transform: scale(0.7,0.7);"></div>
 
                      </td>
                      </tr>
                      </table>
                      <input type="submit" class="btn btn-primary btn-paso1"  name="OK" value="Continuar con la reserva">
   
 </form>  
 <!--
<aside class="publicidad1">
<img src="{{ asset('images/Banner1.png')}}" width=200 heigth=600>
</aside>
                      -->
 <?php


 ?>
 </div>
</div>
</section>
 @endsection
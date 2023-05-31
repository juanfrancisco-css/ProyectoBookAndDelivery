
@extends('plantillabase')
 @section('content')
<!-- contacto section -->


<section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container  rounded p-2">
        <h1 class="mb-5">Ponte en contacto con nosotros</h1>
   <!-- mensajes de exitos o de error-->       
   @if (session('success'))
   <div id="success"></div>
     <h6 class="alert alert-success">
        {{session('success')}}  !! 
      </h6>
       
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


        <form action=" {{ route('contacto-store') }} " method="POST" >
@csrf



<div class="input-group mb-4">
<span class="input-group-text"><i class="bi bi-person"></i></span>
  <input type="text" class="form-control col-6" placeholder="Nombre" name="nombre" aria-label="Username">
  
</div>
<div class="input-group mb-4">
<span class="input-group-text"><i class="bi bi-envelope-at"></i></span>
  <input type="text" class="form-control " placeholder="Email"  name="email" aria-label="Server">
</div>

<div class="input-group mb-3">
<span class="input-group-text">Asunto</span>
<select class="form-select col-6" name="asunto">
  <option selected value="Reserva de mesa">Reserva de mesa</option>
  <option value="Eventos o celebraciones">Eventos o celebraciones</option>
  <option value="Consultas sobre platos o ingredientes">Consultas sobre platos o ingredientes</option>
  <option value="Comentarios o sugerencias">Comentarios o sugerencias</option>
</select>

 
</div>

<div class="input-group">
  <span class="input-group-text">Mensaje</span>
  <textarea class="form-control"  name="mensaje" rows="6" cols="70" placeholder=" Si estás planeando una reunión, evento o celebración especial, puedes preguntar al restaurante sobre sus servicios de eventos y realizar consultas sobre la disponibilidad, menús especiales, precios y otras condiciones." ></textarea>
</div>
<div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" checked>
    <label class="form-check-label" for="exampleCheck1" >He leído y acepto la <a href="">Política de Privacidad. *</a></label>
  </div>
  <button type="submit" class="btn btn-primary" id="ENVIAR">Enviar</button>
</form>  
       </div>
    </div>
</section>

<script>

let btn = document.getElementById('ENVIAR');
btn.addEventListener('click', function(){
  
});


let messege=`
<h6 class="alert alert-success">
        {{session('success')}} <i class="bi bi-check2-all"></i> !! 
</h6>
`
setTimeout(() => {
  document.getElementById('success').html=messege;
}, 5000);


</script>
@endsection
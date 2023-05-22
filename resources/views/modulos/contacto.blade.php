
@extends('plantillabase')
 @section('content')
<!-- contacto section -->
<section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container  rounded p-2">
        <h1 class="mb-5">Ponte en contacto con nosotros</h1>

<form class="">



<div class="input-group mb-3">
<span class="input-group-text"><i class="bi bi-person"></i></span>
  <input type="text" class="form-control" placeholder="Nombre" aria-label="Username">
  <span class="input-group-text">@</span>
  <input type="text" class="form-control" placeholder="Email" aria-label="Server">
</div>
<div class="input-group mb-3">
  <span class="input-group-text">Asunto</span>
  <input type="text" class="form-control"  aria-label="Amount (to the nearest dollar)">
 
</div>

<div class="input-group">
  <span class="input-group-text">Mensaje</span>
  <textarea class="form-control" aria-label="With textarea"></textarea>
</div>
<div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">He leído y acepto la <a href="">Política de Privacidad. *</a></label>
  </div>
  <button type="button" class="btn btn-primary">Enviar</button>
</form>  
       </div>
    </div>
</section>
@endsection
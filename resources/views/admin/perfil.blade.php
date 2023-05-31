@extends('admin.plantillabase2')
@section('content')

 <section class="container  content-panel mt-5">

 <div class="page-index">

 <div class="alert alert-info" role="alert">
 <i class="bi bi-info-circle"></i> Por motivo de seguridad no se pueden modificar los datos
</div>
 <h1>Perfil <img  src="{{ asset('images/usuario.png')}}" width=50> </h1>
 

<div class="input-group mb-3">
<span class="input-group-text">Nombre</span>
  <input type="text" class="form-control"  value=" 
  @auth
        {{  auth()->user()->name }} 
 @endauth
        " readonly>
 
</div>

<div class="input-group mb-3">
<span class="input-group-text">Apellidos</span>
  <input type="text" class="form-control"  value=" 
  @auth
        {{  auth()->user()->surname }} 
 @endauth
        " readonly>
</div>
<div class="input-group mb-3">
  <span class="input-group-text">@</span>
  <input type="text" class="form-control" value=" 
  @auth
        {{  auth()->user()->email }} 
 @endauth
        " readonly>
  
 
</div>

<div class="input-group mb-3">
<span class="input-group-text">Clave</span>
  <input type="password" class="form-control"  value=" 
  @auth
        {{  auth()->user()->password }} 
 @endauth
        " readonly>
</div>
<a class="btn btn-primary disabled" role="button" aria-disabled="true">Modificar</a>

</div>
</section>
@endsection
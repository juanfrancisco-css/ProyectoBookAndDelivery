@extends('admin.plantillabase2')
@section('content')
  <!-- Formulario de Registro -->
  <section class=" container form-register ">

<form action="{{ route('registrarse') }}" method="POST">
  @csrf  <!-- Token es necesario -->

<h1>Crear Usuario</h1>
<div class="alert alert-secondary" role="alert">
<i class="bi bi-info-circle"></i> Aqui podrás crear usuarios con privilegios que te ayudarán a gestionar las reservas   
</div>
        
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
<div class="form-floating mb-3">
  <input type="text" class="form-control" name="name" id="name" placeholder="Nombre">
  <label for="username"><i class="bi bi-person"></i> Nombre</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control"  name="surname" id="surname" placeholder="Apellidos">
  <label for="surname"><i class="bi bi-person"></i> Apellidos</label>
</div>
<div class="form-floating mb-3">
  <input type="email" class="form-control"  name="email" id="email" placeholder="Email">
  <label for="email"><i class="bi bi-envelope"></i> Email</label>
</div>

<div class="form-floating mb-3">
  <input type="password" class="form-control"  name="password" id="password" placeholder="Password">
  <label for="password"><i class="bi bi-key"></i> Password</label>
</div>
<div class="form-floating mb-3">
  <input type="password" class="form-control"   name="password_confirmation" id="password" placeholder="Verificar Password">
  <label for="password"><i class="bi bi-key"></i> Verificar Password</label>
</div>

  <button type="submit" class="btn btn-primary w-50 ">Dar de Alta</button>
  <hr>

</form>
</section>
<!-- fin del registro-->
@endsection
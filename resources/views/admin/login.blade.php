@extends('admin.plantillabase')
@section('content')
<!-- formulario de login -->


<main class="form-signin w-100 mt-5 text-center">

<form action="{{ route('login')}} " method="POST" >
  @csrf

  <div class="">
  <img   class="mb-4 " src="{{ asset('images/favicon.png') }}" alt="mi foto" width="72" height="57">
  <h1 class="h3 mb-3 fw-normal">Book&Delivery</h1>
</div>
  @if ($errors->any())
    <div class="alert alert-danger w-50" style="margin-left:30%;text-align:left">
        <p>Por favor, corrige los siguientes errores:</p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-floating col-3 text-center " style="margin-left:38%;">
  <input type="text" class="form-control "  name="email" id="email" placeholder="name@example.com" >
  <label for="floatingInput">Dirección de correo electrónico</label>
</div>


<div class="form-floating  col-3" style="margin-left:38%;">
  <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña">
  <label for="floatingPassword">Contraseña</label>
</div>

<button class=" btn btn-lg btn-primary  mt-2 col-3" type="submit">Iniciar Sesión</button>
    <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
  </form>
</main>
@endsection
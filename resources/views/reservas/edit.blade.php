@extends('admin.plantillabase2')
@section('content')

<section class="container panel-edit-reserva">
<h1>Modificar Datos de la Reserva</h1>
<p><i class="bi bi-info-circle"></i> Información</p>

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

<form action="{{ route('reserva-update', ['id' => $reserva->id]) }}"  method="post" class="form-reserva-edit">
   
    @csrf
    @method('PUT')
  <div class="mb-3">
   <label> Numero de Personas</label>
  <input type="number" min="1" max="16" name="NumPersonas" class="form-control" id="exampleInputPassword1"  value="{{   $reserva->NumPersonas }}">
  </div>
  <div class="mb-3">
  <label class="form-label">Fecha</label>
    <input type="text"  name="fecha" class="form-control" id="exampleInputPassword1"  value="{{  $reserva->fecha }}">
  </div>
  <!--
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Fecha</label>
    <input type="date"   class="form-control" id="exampleInputPassword1"  value="{{  $reserva->fecha }}">
</div>
-->
  <div class="input-group flex-nowrap mb-3">
  <span class="input-group-text" id="addon-wrapping">Hora</span>
  <input type="text"  class="form-control" name="hora" value="{{  $reserva->hora }}"  aria-describedby="addon-wrapping">
</div>

  <div class="input-group flex-nowrap mb-3">
  <span class="input-group-text" id="addon-wrapping">+34</span>
  <input type="text" class="form-control" name="telefono" placeholder="Telefono " value="{{  $reserva->telefono }}"  aria-describedby="addon-wrapping">
</div>

<div class="input-group flex-nowrap mb-3">
  <span class="input-group-text" id="addon-wrapping">@</span>
  <input type="email" class="form-control" name="email" placeholder="Email "  value="{{  $reserva->email }}" aria-describedby="addon-wrapping">
</div>
<div class="input-group flex-nowrap mb-3 ">
  <span class="input-group-text" id="addon-wrapping">Nombre</span>
  <input type="text" class="form-control" name="nombre" placeholder="Nombre "  value="{{  $reserva->nombre }}" aria-describedby="addon-wrapping">
</div>

 


  <button type="submit" class="btn btn-primary">Modificar</button>
  <a href="{{ route('reserva-index')}}"  class="btn btn-danger">Cancelar</a>
</form>
</section>
@endsection
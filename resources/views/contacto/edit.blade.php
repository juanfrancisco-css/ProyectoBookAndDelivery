@extends('admin.plantillabase2')
@section('content')

<section class="container panel-edit-reserva">
<div class="alert alert-info" role="alert">
<i class="bi bi-info-circle"></i> Ponte en contacto con tus clientes .
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

<form action="{{ route('contacto-update', ['id' => $contacto->id]) }}"  method="post" class="form-reserva-edit">
   
    @csrf
    @method('PUT')
  

<div class="input-group mb-4">
<span class="input-group-text">De  </span>
  <input type="text" class="form-control "   value="Book&Delivery@gmail.com" readonly>
</div>
<div class="input-group mb-4">
<span class="input-group-text">Para </span>
  <input type="text" class="form-control " placeholder="Email"  name="email" aria-label="Server" value="{{   $contacto->email }}" readonly>
</div>
<input type="hidden" class="form-control "  name="nombre" aria-label="Server" value="{{   $contacto->nombre }}" readonly>

<div class="input-group mb-3">
<span class="input-group-text">Asunto</span>

<input type="text" class="form-control "   name="asunto" aria-label="Server" value="{{   $contacto->asunto }}" readonly>
 
</div>
<div class="input-group">
  <span class="input-group-text"><i class="bi bi-question-circle"></i></span>
  <textarea class="form-control"   rows="3" cols="70"  readonly> 
  {{   $contacto->mensaje }}
  </textarea>
</div>
<br>
<div class="alert alert-warning col-3" role="alert">
<i class="bi bi-info-circle"></i> Escribe directamente tu respuesta aqui abajo .
</div>
<div class="input-group">
  <span class="input-group-text">Respuesta</span>
  <textarea class="form-control"  name="mensaje" rows="6" cols="70" placeholder="Escribe directamente tu respuesta."> 
  Tomando en consideración su respuesta 
  </textarea>
</div>


  


  <button type="submit" class="btn btn-primary">Enviar Respuesta</button>
  <a href="{{ route('contacto-index')}}"  class="btn btn-danger">Cancelar</a>
</form>
</section>
@endsection
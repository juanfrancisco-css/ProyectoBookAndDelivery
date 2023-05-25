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
        <h1 >Modifica el plato</h1>
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
  <form action="{{ route('carta-update', $plato->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $plato->nombre) }}" placeholder="Nombre" required>
    </div>
    <div>
        <label for="descripcion">Descripción:</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion', $plato->descripcion) }}" placeholder="Descripción" required>
    </div>
    <div>
        <label for="precio">Precio:</label>
        <input type="number" class="form-control" id="precio" name="precio" value="{{ old('precio', $plato->precio) }}" placeholder="Precio" required>
    </div>
    <div>
        <label for="foto">Foto:</label>
        <input type="file" class="form-control" id="foto" name="foto" accept=".png">
    </div>
    <div>
        <img src="images/{{ $plato->foto }}" alt="Imagen del plato">
    </div>
    <div>
        <input type="checkbox" id="activo" name="activo" {{ old('activo', $plato->activo) ? 'checked' : '' }}>
        <label for="activo">Activo</label>
    </div>
    <div>
        <label for="categoria">Categoría:</label>
        <input type="text" class="form-control" id="categoria" name="categoria" value="{{ old('categoria', $plato->categoria) }}" placeholder="Categoría" required>
    </div>
    <div class="btn_box">
        <button type="submit" class="btn btn-primary">Actualizar Plato</button>
    </div>
</form>


          </div>
        </div>
        
      </div>
    </div>


  </section>
  <!-- end book section -->
  @endsection
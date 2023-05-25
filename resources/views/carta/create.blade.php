 
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
        <h1 >Crea el plato</h1>
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
  <form action="{{ route('carta-store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre" required>
    </div>
    <div>
        <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion') }}" placeholder="Descripción" required>
    </div>
    <div>
        <input type="number" class="form-control" id="precio" name="precio" value="{{ old('precio') }}" placeholder="Precio" required>
    </div>
    <div>
        <input type="file" class="form-control" id="foto" name="foto" accept=".png" required>
    </div>
    <div>
        <input type="checkbox" id="activo" name="activo" {{ old('activo') ? 'checked' : '' }}>
        <label for="activo">Activo</label>
    </div>
    <div>
        <input type="text" class="form-control" id="categoria" name="categoria" value="{{ old('categoria') }}" placeholder="Categoría" required>
    </div>
    <div class="btn_box">
        <button type="submit" class="btn btn-primary">Crear Plato</button>
    </div>
</form>
          </div>
        </div>
        
      </div>
    </div>


  </section>
  <!-- end book section -->
  @endsection
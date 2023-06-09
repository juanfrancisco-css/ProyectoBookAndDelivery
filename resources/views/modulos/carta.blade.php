
 @extends('plantillabase')
 @section('content')
 
 
<section class="food_section layout_padding-bottom ">
    <div class="container mt-5">
      <div class="heading_container heading_center">
        <h2>
          La Carta
        </h2>
      </div>
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

      <ul class="filters_menu">
        <li class="active" data-filter="*">todo</li>
        @foreach ($categorias as $categoria)
            <li data-filter=".{{ $categoria }}">{{ $categoria }}</li>
        @endforeach
      </ul>

      <div class="filters-content">
        <div class="row grid">
          @foreach ($platos as $plato)
            @if ($plato->activo)
            <div class="col-sm-6 col-lg-4 all {{ $plato->categoria }}">
                <div class="box">
                    <div>
                        <div class="img-box">
                            <img src="images/{{ $plato->id }}.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>{{ $plato->nombre }}</h5>
                            <p>{{ $plato->descripcion }}</p>
                            <div class="options">
                                <h6>€{{ $plato->precio }}</h6>
                                <form action="{{ route('pedido-add-plato') }}" method="POST">
                                  @csrf
                                  <input type="hidden" name="plato_id" value="{{ $plato->id }}">
                                  <button type="submit" class="carrito">
                                    <img src="images/carrito.png" width=20>
                              </button>
                              </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
          @endforeach

        </div>
      </div>
      <!--
         boton 
      <div class="btn-box">
        <a href="">
          View More
        </a>
      </div>
-->
    </div>
  </section>
@endsection
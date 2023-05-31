@extends('admin.plantillabase2')
@section('content')
<div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
      <div class="col d-flex flex-column align-items-start gap-2">
        <h3 class="fw-bold">Bienvenido!! <br> a tu Panel de Admistrador   <img class="icon-admin" src="{{ asset('images/hola.png')}}" width=60></a> <br>
         <!--
        @auth
        {{  auth()->user()->name }} 
        @endauth
-->
      </h3>
        <p class="text-body-secondary">Gracias por utilizar nuestro sistema de administración de reservas. Aquí podrás realizar todas tus gestiones de manera eficiente y sencilla. Puedes crear una reserva y  hasta modificar tus fechas, estamos aquí para ayudarte en todo momento. ¡Descubre todas las funcionalidades que ofrecemos y aprovecha al máximo tu experiencia!.</p>
       
      </div>

      <div class="col">
        <div class="row row-cols-1 row-cols-sm-2 g-4">
          <!--
          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center ">
                <a href="{{ route('reserva-paso1')}}" class="btn btn-outline-secondary col-12"><i class="bi bi-calendar2-plus"></i></a>
            </div>
            <h4 class="fw-semibold mb-0">Hacer Reserva</h4>
            <p class="text-body-secondary">Aquí podrás crear tus reservas de una manera fácil y rápida.</p>
          </div>
-->

          <div class="col d-flex flex-column gap-2">
     <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
     <i class="bi bi-calendar2-plus"></i>
        </div>
        <div>
          <h3 class="fs-2">Reservas</h3>
          <p>
          Aquí podrás crear tus reservas de una manera fácil y rápida.
          </p>
          <a href="{{ route('reserva-create')}}" class="btn btn-primary">
          Hacer una Reservar 
          </a>
        </div>
</div>
<!--
          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center ">
                <a href="{{ route('reserva-index')}}" class="btn btn-outline-secondary col-12"><i class="bi bi-database-up"></i></a>
            </div>
            <h4 class="fw-semibold mb-0">Modificar Reservas</h4>
            <p class="text-body-secondary">Si lo que deseas es modificar los datos o anular una reserva picha aqui.</p>
          </div>
-->
          <div class="col d-flex flex-column gap-2">
     <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
     <i class="bi bi-tools"></i>
        </div>
        <div>
          <h3 class="fs-2">Modificar</h3>
          <p>
          Si lo que deseas es modificar los datos o anular una reserva picha aqui.
          </p>
          <a href="{{ route('reserva-index')}}" class="btn btn-primary">
          Modificar Reserva
          </a>
        </div>
</div>


          <!--
          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center ">
                <a href="{{ route('index')}}" class="btn btn-outline-secondary col-12" target="_blank"><i class="bi bi-eye"></i></a>
            </div>
            <h4 class="fw-semibold mb-0">Book&Delivery</h4>
            <p class="text-body-secondary">¡Échale una ojeada a tu tienda!  .</p>
          </div>
-->
          <div class="col d-flex flex-column gap-2">
     <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
     <i class="bi bi-eye"></i>
        </div>
        <div>
          <h3 class="fs-2">Book&Delivery</h3>
          <p>
          ¡Échale una ojeada a tu tienda!  .
          </p>
          <a href="{{ route('index')}}" class="btn btn-primary">
        Ver mi Tienda
          </a>
        </div>
</div>

          <!--
          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center ">
                <a href="{{ route('registrarse')}}" class="btn btn-outline-secondary col-12"><i class="bi bi-person-add"></i></a>
            </div>
            <h4 class="fw-semibold mb-0">Crear Usuarios con Privilegios</h4>
            <p class="text-body-secondary">Te ayudarán a gestionar las reservas y los mensajes.</p>
          </div>
          -->

<!-- 
          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center ">
                <a href="{{ route('carta-index') }}" class="btn btn-outline-secondary col-12"><i class="bi bi-shop-window"></i></a>
            </div>
            <h4 class="fw-semibold mb-0">Gestionar la Carta</h4>
            <p class="text-body-secondary">Activa tus platos para que los clientes puedan verlos. También puedes modificar sus descripciones.</p>
          </div>
-->
<div class="col d-flex flex-column gap-2">
     <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
            <i class="bi bi-shop-window"></i>
        </div>
        <div>
          <h3 class="fs-2">Gestionar la Carta</h3>
          <p>
            Activa tus platos para que los clientes puedan verlos. También puedes modificar sus descripciones.
          </p>
          <a href="{{ route('carta-index') }}" class="btn btn-primary">
        Modificar Carta
          </a>
        </div>
</div>

       

        </div>
      </div>
    </div>
  </div>

@endsection
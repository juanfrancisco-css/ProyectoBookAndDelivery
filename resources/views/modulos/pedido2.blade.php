@extends('plantillabase')
@section('content')

<section class="food_section layout_padding-bottom">
    <div class="container mt-5">
        <div class="heading_container heading_center">
            <h2>Datos del pedido</h2>
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

        <div class="checkout">
            <form action="{{ route('pedido-confirmacion') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="correo" id="correo" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" name="telefono" id="telefono" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" name="direccion" id="direccion" class="form-control" required>
                </div>

                <br><div>
                    <button type="submit" class="btn btn-success">Pagar</button>
                </div>
            </form>

            <br><div>
                <a href="{{ route('pedido-index') }}" class="btn btn-primary">Volver al Carrito</a>
            </div>
        </div>
    </div>
</section>
@endsection
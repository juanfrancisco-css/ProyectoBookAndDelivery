@extends('admin.plantillabase2')
@section('content')
<!-- book section -->
<section class="book_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <!-- Si el usuario está autenticado -->
            @auth
            <a class="btn btn-secondary" href="{{ route('pedidos-admin-index') }}"><i class="bi bi-info-circle"></i></a>
            @endauth
            <!-- fin -->
            <h1>Detalles del Pedido</h1>
            <p><span>Book&Delivery (Madrid)</span></p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form_container">
                    <!-- mensajes de éxitos o de error-->
                    @if (session('success'))
                    <h6 class="alert alert-success">{{ session('success') }}</h6>
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
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Platos</th><th>Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $platosArray = json_decode($pedido->platos, true) ?? [];
                            $totalImporte = 0;
                            @endphp
                            @forelse ($platosArray as $platoId => $cantidad)
                            @php
                                $platoData = \App\Models\Plato::find($platoId);
                                $cantidad = is_array($cantidad) ? reset($cantidad) : $cantidad;
                                $importe = $cantidad * $platoData->precio;
                                $totalImporte += $importe;
                            @endphp
                            <tr>
                                <td>
                                    <img src="../images/{{ $platoData->id }}.png" alt="Imagen del plato"
                                        width="50">
                                    {{ $platoData->nombre }}
                                </td>
                                <td>{{ $cantidad }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="2">No se encontraron platos</td>
                            </tr>
                            @endforelse
                            <thead>
                                <tr>
                                    <th colspan="2">Datos del Cliente</th>
                                </tr>
                            </thead>
                            <tr>
                                <td><strong>Nombre:</strong></td>
                                <td>{{ $pedido->nombre }}</td>
                            </tr>
                            <tr>
                                <td><strong>Email:</strong></td>
                                <td>{{ $pedido->correo }}</td>
                            </tr>
                            <tr>
                                <td><strong>Teléfono:</strong></td>
                                <td>{{ $pedido->telefono }}</td>
                            </tr>
                            <tr>
                                <td><strong>Dirección:</strong></td>
                                <td>{{ $pedido->direccion }}</td>
                            </tr>
                            <tr>
                                <td><strong>Importe Total:</strong></td>
                                <td>{{ $totalImporte }} €</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="btn_box">
                        <button type="button" class="btn btn-success">Marcar como Enviado</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end book section -->
@endsection

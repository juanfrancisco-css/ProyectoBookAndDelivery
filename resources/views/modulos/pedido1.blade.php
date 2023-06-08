@extends('plantillabase')
@section('content')

<section class="food_section layout_padding-bottom">
    <div class="container mt-5">
        <div class="heading_container heading_center">
            <h2>Carrito</h2>
        </div>

        <div class="cart">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Precio unitario</th>
                        <th>Foto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total = 0;
                    @endphp
                    @foreach (session('cart', []) as $plato_id => $item)
                        @php
                            $plato = $item['plato'];
                            $subtotal = $plato->precio * $item['cantidad'];
                            $total += $subtotal;
                        @endphp
                        <tr>
                            <td>{{ $plato->nombre }}</td>
                            <td>{{ $item['cantidad'] }}</td>
                            <td>€{{ $plato->precio }}</td>
                            <td><img src="images/{{ $plato->id }}.png" alt="Foto" width="80"></td>
                            <td>
                                <form action="{{ route('pedido-remove-plato') }}" method="POST" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="plato_id" value="{{ $plato_id }}">
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                                <form action="{{ route('pedido-increment-plato') }}" method="POST" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="plato_id" value="{{ $plato_id }}">
                                    <button type="submit" class="btn btn-primary btn-sm">+</button>
                                </form>
                                <form action="{{ route('pedido-decrement-plato') }}" method="POST" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="plato_id" value="{{ $plato_id }}">
                                    <button type="submit" class="btn btn-primary btn-sm">-</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="total">
                <h4>Total: €{{ $total }}</h4>
            </div>

            <div class="checkout">
                <form action="{{ route('pedido-datos') }}" method="GET">
                    @csrf
                    <button type="submit" class="btn btn-success">Continuar con el pedido</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

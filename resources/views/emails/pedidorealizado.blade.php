<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book&Delivery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        h1 {
            padding-bottom: 2%;
        }

        section {
            padding: 3%;
        }

        .box {
            padding: 3%;
            box-shadow: 1px 2px 9px black;
        }

        .box2 {

            padding: 3%;


        }

        .box2 p {
            padding-bottom: -1%;
            text-align: center;
            font-size: 8px;
        }

        table td {
            padding-left: 4%;
        }

    </style>
</head>

<body class="container p-2">
    <section>
        <h1>Tu pedido en Book&Delivery está realizado, recibirás otro email cuando esté de camino</h1>
        <div class="box">
            <h3>Detalles del Pedido</h3>
            <div class="container text-center">
                <table>
                    <tr>
                        <td>
                            <p><i class="bi bi-calendar-check"></i> Fecha del Pedido:
                                <span class="content"> {{ $pedido->created_at->format('Y-m-d H:i:s') }}</span></p>
                        </td>
                    </tr>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Platos</th>
                            <th>Cantidad</th>
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
                            <td>{{ $platoData->nombre }}</td>
                            <td>{{ $cantidad }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="2">No se encontraron platos</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <table>
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
                        <td><strong>Precio Total:</strong></td>
                        <td>{{ $totalImporte }} €</td>
                    </tr>
                </table>
                <hr>
                <div class="box2">
                    <p>Si tienes alguna pregunta o algún comentario sobre el servicio o el pago, ponte en contacto con
                        <a href="{{ route('index')}}">Book&Delivery</a>.</p>
                    <p>Si tienes alguna pregunta o algún comentario sobre la experiencia de reserva, ponte en contacto con
                        Reserva con Google.</p>
                    <p>Te hemos enviado este correo electrónico obligatorio porque estás utilizando Reserva con Google.</p>
                    <p>© 2020 Google LLC.</p>
                    <p>Google LLC. 1600 Amphitheatre Parkway, Mountain View, CA 94043, Estados Unidos.</p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1

@extends('admin.plantillabase2')
@section('css')
<link  href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
<link  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet"/>
@endsection

@section('content')

<section class="container listado-reversas content-panel">
@if (session('success'))
    <h6 class="alert alert-success">{{ session('success') }}</h6>
@endif

<div class="alert alert-info" role="alert">
    <i class="bi bi-info-circle"></i> Aquí se muestran los pedidos realizados.
</div>

<table id="pedidos_tabla" class="table table-dark table-striped mt-1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Fecha y Hora</th>
            <th>Importe</th>
            <th>Enviado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pedidos as $pedido)
        <tr>
            <td>{{ $pedido->id }}</td>
            <td>{{ $pedido->nombre }}</td>
            <td>{{ $pedido->correo }}</td>
            <td>{{ $pedido->telefono }}</td>
            <td>{{ $pedido->direccion }}</td>
            <td>{{ $pedido->created_at }}</td>
            <td>{{ $pedido->importe }}</td>
            <td>{{ $pedido->enviado ? 'Enviado' : 'Pendiente' }}</td>
            <td>
                <a href=" {{route('pedido-admin-mostrar', ['id' => $pedido->id])}} " class="btn btn-success">Ver Pedido</a> 
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</section>

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#pedidos_tabla').DataTable({
            "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]],
            "language": {
                "search": "Buscar",
                "lengthMenu": "Mostrar _MENU_",
                "info": "Página _PAGE_ de _PAGES_",
                "paginate": {
                    "previous": "Anterior",
                    "next": "Siguiente",
                    "first": "Primero",
                    "last": "Último"
                }
            }
        });
    });
</script>
@endsection

@endsection

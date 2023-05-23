
@extends('admin.plantillabase2')
@section('css')
<link  href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
<link  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet"/>
@endsection

@section('content')

<section class="container listado-reversas content-panel">
@if (session('success'))
    <h6 class="alert alert-success">{{session('success')}}</h6>
    @endif

    <div class="alert alert-secondary" role="alert">
<i class="bi bi-info-circle"></i> Aqui podrás gestionar tus reservas   
</div>
<a href="{{ route('reserva-create') }}" class="btn btn-primary mt-4"><i class="bi bi-plus-circle-fill"></i> Crear Reserva </a>




<table  id="reservas_tabla" class="table table-dark table-striped mt-1">
<thead>
    <tr>
      <th>Nombre</th>
      <th>Telefono</th>
      <th>Email</th>
      <th>Numero de Personas</th>
      <th>Fecha y hora</th>
      <th>Gestionar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($reservas as $reserva )
    <tr>
      
      <td>{{  $reserva->nombre }}</td>
      <td>{{  $reserva->telefono }}</td>
      <td>{{  $reserva->email }}</td>
      <td>{{  $reserva->NumPersonas }}</td>
      <td>{{   $reserva->fecha}} a las  {{ $reserva->hora }}</td>
     
       <td>
      

      <form action ="{{ route('reserva-destroy', [$reserva->id]) }}" method="post">
      <a href="{{ route('reserva-edit', ['id' => $reserva->id]) }}" class="btn btn-info">Editar</a>
      @csrf
      @method('DELETE')
             
              <button class="btn btn-danger">Borrar</button>
      </form> 
    
    </td>
    </tr>  
    @endforeach
</tbody> 
</table>

</section>

@section('js')

<script  src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script  src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script  src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready(function () {
    $('#reservas_tabla').DataTable({
      "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]],
      "language":{
        "search": "buscar",
        "lengthMenu": "Mostrar _MENU_ ",
        "info": "Página _PAGE_ de _PAGES_",
        "paginate":{
          "previous":"Anterior",
          "next":"Siguiente",
          "first":"Primero",
          "last":"ultimo"
        }
      }
    });
});
</script>
@endsection

@endsection
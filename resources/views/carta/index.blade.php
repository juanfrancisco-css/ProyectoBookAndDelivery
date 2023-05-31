
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

    <div class="alert alert-info" role="alert">
<i class="bi bi-info-circle"></i> Aqui podrás gestionar la carta  como activar o desactivar los platos que deseas visualizar.
</div>
<a href="{{ route('carta-create') }}" class="btn btn-primary mt-4"><i class="bi bi-plus-circle-fill"></i> Crear Plato </a>




<table  id="carta_tabla" class="table table-dark table-striped mt-1">
<thead>
    <tr>
      <th>Nombre</th>
      <th>Descripción</th>
      <th>Precio</th>
      <th>Foto</th>
      <th>Activo</th>
      <th>Categoría</th>
      <th>Gestionar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($platos as $plato )
    <tr>
      
      <td>{{  $plato->nombre }}</td>
      <td>{{  $plato->descripcion }}</td>
      <td>{{  $plato->precio }}</td>
      <td>{{  $plato->foto }}</td>
      <td>{{   $plato->activo}}
      <td>{{ $plato->categoria }}</td>
       <td>
      

      <form action ="{{ route('carta-destroy', [$plato->id]) }}" method="post">
      <a href="{{ route('carta-edit', ['id' => $plato->id]) }}" class="btn btn-info">Editar</a>
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
    $('#carta_tabla').DataTable({
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
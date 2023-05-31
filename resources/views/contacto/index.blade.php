
@extends('admin.plantillabase2')
@section('css')
<link  href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
<link  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet"/>
@endsection

@section('content')

<section class="container listado-reversas content-panel">
@if (session('success'))
    <h6 class="alert alert-warning" role="alert">{{session('success')}}</h6>
    @endif

    <div class="alert alert-info" role="alert">
<i class="bi bi-info-circle"></i> Aqui se visualiza todos los mensajes recibidos . 
</div>



<table  id="contacto_tabla" class="table table table-hover table-striped mt-1">
<thead>
    <tr>
      <th>Nombre</th>
     
      <th>Email</th>
      <th>Asunto</th>
      <th>Mensaje</th>
      <th>Gestionar</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach ($contactos as $contacto )
    <tr>
      
      <td>{{ $contacto->nombre }}</td>
      <td>{{ $contacto->email }}</td>
      <td>{{ $contacto->asunto }}</td>
      <td>{{ $contacto->mensaje}}</td>
     
       <td>
      

      <form action ="{{ route('contacto-destroy', [$contacto->id]) }}" method="post">
      <a href="{{ route('contacto-edit', ['id' => $contacto->id]) }}" class="btn btn-success"><i class="bi bi-envelope-plus"></i></a>
      
      @csrf
      @method('DELETE')
             
              <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
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
    $('#contacto_tabla').DataTable({
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
        },
        "emptyTable": "No hay datos disponibles en la tabla",
      }
    });
});
</script>
@endsection

@endsection
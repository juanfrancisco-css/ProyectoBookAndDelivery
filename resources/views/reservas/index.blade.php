
@extends('admin.plantillabase2')
@section('content')

<section class="container listado-reversas content-panel">
@if (session('success'))
    <h6 class="alert alert-success">{{session('success')}}</h6>
    @endif

    <div class="alert alert-secondary" role="alert">
<i class="bi bi-info-circle"></i> Aqui podrás gestionar tus reservas   
</div>
<a href="{{ route('reserva-create') }}" class="btn btn-primary mt-4"><i class="bi bi-plus-circle-fill"></i></a>

<div class="box-buscador">
<form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
 </form>
</div>


<table class="table table-dark table-striped mt-1">
<thead>
    <tr>
      
      <th scope="col">Nombre</th>
      <th scope="col">Telefono</th>
      <th scope="col">Email</th>
      <th scope="col">Numero de Personas</th>
      <th scope="col">Fecha y hora</th>
      <th scope="col" >Gestionar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($reservas as $reserva )
    <tr>
      
      <td>{{  $reserva->nombre }}</td>
      <td scope="row">{{  $reserva->telefono }}</td>
      <td>{{  $reserva->email }}</td>
      <td>{{  $reserva->NumPersonas }}</td>
      <td>{{   $reserva->fecha}} a las  {{ $reserva->hora }}</td>
     
       <td>
       <a href="{{ route('reserva-edit', ['id' => $reserva->id]) }}" class="btn btn-info">Editar</a>

      <form action ="{{ route('reserva-destroy', [$reserva->id]) }}" method="post">
              @method('DELETE')
              @csrf
              <button class="btn btn-danger">Borrar</button>
      </form> 
    
    </td>
    </tr>  
    @endforeach
    
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
   {{ $reservas->links() }}
    
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>


</section>
@endsection
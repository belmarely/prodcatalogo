@extends('adminlte::page')

@section('title', 'Configuración')

@section('content_header')
    <h1>Configuración</h1>
@stop

@section('content')
<div class="container">
<a href="productos/create" class="btn btn-primary mb-3" >Agregar</a>
<div class="row justify-content-left">
<div class="col-auto mt-5">
<table id="productos" class="table table-responsive">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Imagen</th>
        <th scope="col">Descripción</th>
        <th scope="col">Precio</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($productos as $producto)
          <tr>
              <td>{{ $producto->nombre }}</td>
              <td><img src="{{ asset($producto->imagen) }}" class="img-fluid img-thumbnail" width="100"></td>
              <td>{{ $producto->descripcion }}</td>
              <td>{{ $producto->precio }}</td>
              <td>
                  <a href="productos/{{ $producto->id }}/edit" class="btn btn-info">Editar</a>
              </td>
          </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</div>
</div>
  <br>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script> 
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script> 

<script>
  $(document).ready(function() {
    $('#productos').DataTable({
      "lengthMenu": [[5,10,50,-1], [5,10,50,"All"]]
    });
  } );
</script>
@stop

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Producto</h1>
@stop

@section('content')
<form action="/productos/{{ $producto->id }}" method="POST" enctype="multipart/form-data" required>
    {{csrf_field()}}
    @method('PUT')
   <div class="mb-3">
       <label for="" class="form-label">Nombre del Producto</label>
       <input id="nombre" name="nombre" type="text" class="form-control" value="{{ $producto->nombre }}" minlength="1" maxlength="100" required>
   </div>
   <div class="mb-3">
       <label for="imagen" class="form-label">Imagen</label>
       <input id="imagen" name="imagen" type="file" class="form-control" value="{{ $producto->imagen }}">
       <img src="{{ asset($producto->imagen) }}" class="img-fluid img-thumbnail" width="100" alt="{{ $producto->imagen }}" required>
       <br>
       @error('imagen')
           <small class="text-danger">{{$message}}</small>
       @enderror
   </div>
   <div class="mb-3">
       <label for="" class="form-label">Descripción</label>
       <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{ $producto->descripcion }}" minlength="5" maxlength="500" required>
   </div>
   <div class="mb-3">
       <label for="" class="form-label">Precio</label>
       <input id="precio" name="precio" type="number" step="any" class="form-control" value="{{ $producto->precio }}" required>
   </div>
   <a href="/productos" class="btn btn-secondary">Cancelar</a>
   <button type="submit" class="btn btn-primary">Guardar</button>
   <br>
   <br>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop

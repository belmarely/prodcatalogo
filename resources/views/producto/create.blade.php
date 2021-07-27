@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agregar Nuevo Producto</h1>
@stop

@section('content')

<form action="http://localhost/prodcatalogo/public/productos" method="POST" enctype="multipart/form-data">
     {{csrf_field()}}
    <div class="mb-3">
        <label for="" class="form-label">Nombre del Producto</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="imagen" class="form-label">Imagen</label>
        <input id="imagen" name="imagen" type="file" class="form-control" accept="image/" tabindex="2">
        <br>
        @error('imagen')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control" tabindex="4">
    </div>
    <a href="http://localhost/prodcatalogo/public/productos" class="btn btn-secondary" tabindex="6">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop

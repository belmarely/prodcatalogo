@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agregar Nuevo Producto</h1>
@stop

@section('content')

<form action="/productos" method="POST" enctype="multipart/form-data">
     {{csrf_field()}}
    <div class="mb-3">
        <label for="" class="form-label">Nombre del Producto</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" minlength="1" maxlength="100" required>
    </div>
    <div class="mb-3">
        <label for="imagen" class="form-label">Imagen</label>
        <input id="imagen" name="imagen" type="file" class="form-control" accept="image/" tabindex="2" required>
        <br>
        @error('imagen')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <textarea id="descripcion" name="descripcion" type="text" class="form-control" tabindex="3" minlength="5" maxlength="500" required></textarea>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control" tabindex="4" required>
    </div>
    <a href="/productos" class="btn btn-secondary" tabindex="6">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop

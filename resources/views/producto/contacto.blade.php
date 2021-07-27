@extends('adminlte::page')

@section('title', 'Mensajes')

@section('content_header')
    <h1>Mensajes</h1>
@stop

@section('content')
<div class="container">
  <div class="">
    <img src="{{ asset('web/images/logo3.jpeg') }}" class="img-responsive"  style="padding: 20px; margin: 0px; border: 5px solid white; float: right; width:550px; display: block; max-width: 100%;"/>
  </div>
  
  <div class="row justify-content-left">
    <div class="col-auto mt-5">
      <table id="productos" class="table table-responsive mx-auto d-block"  width="100%" >
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha</th>
            <th scope="col">Leer</th>
            <th scope="col">Eliminar</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($productos as $contacto)
              <tr>
                  <td>{{ $contacto->nombre }}</td>
                   <td>{{ $contacto->created_at }}</td>
                  <td>
                      <a href="myModal-{{$contacto->id}}" data-toggle="modal" data-target="#myModal-{{$contacto->id}}"><span aria-hidden="true"></span><i class="fab fa-readme"></i></a>
                  </td>
                  <td>
                    <form action="{{ route ('productos.destroy',$contacto->id) }}" method="POST">
                      {{csrf_field()}}
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt justify-center"></i></button>
                  </form>
                </td>
              </tr>
          @endforeach
        </tbody>
      </table>

    </div>
  </div>
  
</div>



  <!--Modal de descripcion de productos-->
  <div>
      @foreach ($productos as $contacto)
        <div class="modal fade" id="myModal-{{$contacto->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo mensaje de: {{ $contacto->nombre }} </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Email: {{ $contacto->correo }}</label>
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Teléfono: {{ $contacto->telefono }}</label>
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Mensaje:</label>
                    <p> {{ $contacto->mensaje }}</p>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      @endforeach
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

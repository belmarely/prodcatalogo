@extends('layouts.plantillabase')

@section('contenido')
<br>
<br>
<!-- banner -->
	<div class="banner10" id="home1">
		<div class="container">
			<h2>Nueva Colección</h2>
		</div>
        <div class="clearfix"> </div>
	</div>
<!-- banner -->

<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio</a> <i>/</i></li>
				<li><a href="/contactos"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Contáctanos</a> <i>/</i></li>
			</ul>
		</div>
	</div>
<!-- //breadcrumbs -->
        <br>
        <br>
            <!-- Imagenes a mostrar -->  
        <div id="camisas" class="col-md-7 wthree_banner_bottom_right items-center">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                        <br>
                        <li role="presentation" class="active"><a href="vistas/">Nueva Colección</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div>
       <div class="container">
        @foreach ($vistas as $producto)
            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                    <div class="agile_ecommerce_tabs">
                        <div id="vistas" class="col-md-4 agile_ecommerce_tab_left">
                            <div class="hs-wrapper">
                                <!--Se repite varias veces por el efecto que tiene la clase hs-wrapper-->
                                <img src="{{ asset($producto->imagen) }}" alt="" class="img-responsive" width="500" height="800"/>
                                <img src="{{ asset($producto->imagen) }}" alt="" class="img-responsive" width="500" height="800"/>
                                <img src="{{ asset($producto->imagen) }}" alt="" class="img-responsive" width="500" height="800"/>
                                <img src="{{ asset($producto->imagen) }}" alt="" class="img-responsive" width="500" height="800"/>
                                <img src="{{ asset($producto->imagen) }}" alt="" class="img-responsive" width="500" height="800"/>
                                <img src="{{ asset($producto->imagen) }}" alt="" class="img-responsive" width="500" height="800"/>
                                <div class="w3_hs_bottom">
                                <ul>
                                    <li>
                                        <a href="myModal-{{$producto->id}}" data-toggle="modal" data-target="#myModal-{{$producto->id}}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h5><a href="single.html">{{ $producto->nombre }}</a></h5>
                        <div class="simpleCart_shelfItem">
                            <p><i class="item_price">L{{ $producto->precio }}</i></p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
         @endforeach
         {{$vistas->links()}}
    </div>
                <!--Modal de descripcion de productos-->
    <div>
        @foreach ($vistas as $producto)
            <div class="modal video-modal fade" id="myModal-{{$producto->id}}" tabindex="-1" role="dialog" aria-labelledby="myModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                        </div>
                        <section>
                        <div class="modal-body">
                            <div class="col-md-5 modal_body_left">
                                <img src="{{ $producto->imagen }}" alt=" " class="img-responsive" />
                            </div>
                            <div class="col-md-7 modal_body_right">
                                <h4>{{ $producto->nombre }}</h4>
                                    <p>{{ $producto->descripcion }}.</p>
                                    <div class="rating">
                                        <div class="rating-left">
                                            <img src="web/images/star-.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="web/images/star-.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="web/images/star-.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="web/images/star-.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="web/images/star-.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="modal_body_right_cart simpleCart_shelfItem">
                                        <p><i class="item_price">L{{ $producto->precio }}</i></p>
                                    </div>
                                    </div>
                                    <div class="clearfix"> </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>  
</div>
</div>
</div>
</div>

@endsection

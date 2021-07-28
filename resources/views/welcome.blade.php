@extends('layouts.plantillabase')

@section('contenido')
<!-- Menú -->
<div class="navigation">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div> 
            <!-- Menú -->
            <div class="collapse navbar-collapse justify-content-center" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav justify-center">
                    <li class="active"><a href="/" class="act">Inicio</a></li>	
                    <li><a href="/vistas">Nueva Colección</a></li>
                    <li><a href="#about">Acerca de</a></li>
                    <li><a href="/contactos">Contacto</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- banner -->
<div class="banner" id="home1">
    <div class="container">
        <h3>fashions fade, <span>style is eternal</span></h3>
    </div>
</div>
<!--banner -->

<!-- banner-bottom -->
<div class="banner-bottom">
    <div class="container">
        <div class="col-md-5 wthree_banner_bottom_left">
            <!-- pop-up-box -->    
                <link href="web/css/popuo-box.css" rel="stylesheet" type="text/css" property="" media="all" />
                <script src="web/js/jquery.magnific-popup.js" type="text/javascript"></script>
            <!--pop-up-box -->
            <script>
                $(document).ready(function() {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',
                    fixedContentPos: false,
                    fixedBgPos: true,
                    overflowY: 'auto',
                    closeBtnInside: true,
                    preloader: false,
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });
                });
            </script>
        </div>
        <!-- Imagenes a mostrar -->  
        <div id="camisas" class="col-md-7 wthree_banner_bottom_right items-center">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="/vistas">Nueva Colección</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div>
    @php
        $count = 0;
    @endphp
     @foreach ($prendas as $producto)
        @break($count == 3)
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
        @php
            $count++;
        @endphp
    @endforeach
</div>
<!--Modal de descripcion de productos-->
<div>
    @foreach ($prendas as $producto)
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
<br>
<br>
<!-- banner-bottom -->
<!-- about -->
	<div id="about" class="team">
		<div class="container">	
			<div class="w3ls_about_grids">
				<div class="col-md-6 w3ls_about_grid_left">
					<p>Somos una tienda que vende camisas y blusas que son prendas indispensables en el armario, ya que destacan por su 
                        versatilidad porque puedes llevarlas al trabajo, a una reunión con los amigos, a la 
                        escuela, entre otros.</p>
					<div class="col-xs-2 w3ls_about_grid_left1">
						<span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 w3ls_about_grid_left2">
						<p>Además de elegir una prenda que sea acorde a la ocasión, un factor muy importante 
                            para tomar en cuenta, es el tipo de tela con la que esté confeccionada. Si deseas 
                            vestir con estilo pero a la vez sentirte cómodo durante el día, todo se resume a 
                            que estas en la tienda correcta. </p>
					</div>
					<div class="clearfix"> </div>
					<div class="col-xs-2 w3ls_about_grid_left1">
						<span class="glyphicon glyphicon-flash" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 w3ls_about_grid_left2">
						<p>La tela de nuestras prendas estan compuesta por una porción de poliéster y otra de algodón. Suele ser 
                            una tela resistente y de larga duración, la puedes encontrar en diferentes estilos de camisas. 
                            Gracias a esto, logramos tener clientes satisfechos.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 w3ls_about_grid_right">
					<img src="web/images/img2.jpeg" alt=" " class="img-responsive" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- about -->
@endsection

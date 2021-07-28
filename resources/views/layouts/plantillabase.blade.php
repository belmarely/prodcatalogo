<!DOCTYPE html>
<html>
<head>
<title>Women´s Fashion</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Womens Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="web/css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="web/js/jquery.min.js"></script>
<!-- //js -->
<!-- countdown -->
<link rel="stylesheet" href="web/css/jquery.countdown.css" />
<!-- //countdown -->
<!-- cart -->
<script src="web/js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="web/js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling -->
</head>
<body>
<!-- header -->
    <script>
        $('#myModal88').modal('show');
    </script>
    <div class="header">
        <div class="container">
            <div class="w3l_login">
                <a href="{{ route('login') }}" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
            </div>
            <div class="w3l_logo">
                <h1><a href="/">Women´s Fashion<span>For Fashion Lovers</span></a></h1>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
<!--header -->

    <div class="container">
        @yield('contenido')
    </div>

    <!-- footer -->
        <div class="footer">
            <div class="container">
                <div class="w3_footer_grids">
                    <div class="col-md-3 w3_footer_grid">
                        <h3>Contacto</h3>
                        <ul class="address">
                            <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Honduras, <span>Centro América.</span></li>
                            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@wfashion.com">info@wfashion.com</a></li>
                            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
                        </ul>
                    </div>
                    <div class="col-md-3 w3_footer_grid">
                        <h3>Información</h3>
                        <ul class="info"> 
                            <li><a href="#about">Acerca de nosotros</a></li>
                            <li><a href="/contactos">Contacto</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 w3_footer_grid">
                        <h3>Categoria</h3>
                        <ul class="info"> 
                            <li><a href="/vistas">Nueva Colección</a></li>
                            <li><a href="#camisas">Top</a></li>
                            <li><a href="#camisas">Blusas</a></li>
                            <li><a href="#camisas">Camisetas</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 w3_footer_grid">
                        <h3>Redes Sociales</h3>
                        <h4>Follow Us</h4>
                        <div class="agileits_social_button">
                            <ul>
                                <li><a href="#" class="facebook"> </a></li>
                                <li><a href="#" class="twitter"> </a></li>
                                <li><a href="#" class="google"> </a></li>
                                <li><a href="#" class="pinterest"> </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="footer-copy">
                <div class="footer-copy1">
                    <div class="footer-copy-pos">
                        <a href="#home1" class="scroll"><img src="web/images/arrow.png" alt=" " class="img-responsive" /></a>
                    </div>
                </div>
            </div>
        </div>
    <!-- //footer -->
</body>
</html>

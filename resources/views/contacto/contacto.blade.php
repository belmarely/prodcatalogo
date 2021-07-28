@extends('layouts.plantillabase')

@section('contenido')
<br>
<br>
<!-- banner -->
	<div class="banner10" id="home1">
		<div class="container">
			<h2>Contáctanos</h2>
		</div>
	</div>
<!-- //banner -->

<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio</a> <i>/</i></li>
				<li>Contáctanos</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumbs -->

<!-- mail -->
	<div class="mail">
		<div class="container">
			<h3>Contáctanos</h3>
			<div class="agile_mail_grids">
				<div class="col-md-5 contact-left">
					<h4>Dirreción</h4>
					<p>Honduras
						<span>Centro América</span></p>
					<ul>
						<li>Teléfono :+504 9734 6527</li>
						<li><a href="mailto:wfashion@gmail.com">wfashion@gmail.com</a></li>
					</ul>
				</div>
				<div class="col-md-7 contact-left">
					<h4>Comunícate con nosotros</h4>
					<form action="/contactos" method="POST">
						{{csrf_field()}}
						<input type="text" id="nombre" name="nombre" value="Nombre*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre*';}" minlength="4" maxlength="100" required>
						<input type="email" id="correo" name="correo" value="Email*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email*';}" maxlength="255" required>
						<input type="text" id="telefono" name="telefono" value="Teléfono*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Teléfono*';}" minlength="8" maxlength="12" required>
						<textarea id="mensaje" name="mensaje" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mensaje...';}" minlength="5" maxlength="500" required>Mensaje...</textarea>
						<input type="submit" value="Enviar" >
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>

			<div class="contact-bottom">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942300.670296841!2d-88.45441291588598!3d15.218473917482804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6a751a73b731cf%3A0x7ed1de82b6fb8264!2sHonduras!5e0!3m2!1ses!2shn!4v1627321921245!5m2!1ses!2shn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>
	</div>
<!-- //mail -->
@endsection

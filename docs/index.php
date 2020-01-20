<?php

	$path_raiz = './';

?>
<!DOCTYPE html>
<html lang="es">

<head>
	<?php include_once('includes/head.php');?>
</head>

<body id="page-top" class="index">

	<?php include_once('includes/menu.php');?>
	<?php include_once('includes/header.php');?>
	<?php include_once('includes/portfolio.php');?>

	<!-- About Section -->
	<section class="success" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2>Sobre mí</h2>
					<hr class="star-light">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-lg-offset-2">
					<p>Apasionada por la gestión de proyectos con nuevos retos para lograr el frontend y el backend perfecto en base a las tecnologías más actuales. Siempre evolucionando!</p>
				</div>
				<div class="col-lg-4">
					<p>Fullstack developer con más de 6 años de experiencia en una start up de éxito donde he podido crecer y desarrollarme profesionalmente.</p>
				</div>
				<!-- <div class="col-lg-8 col-lg-offset-2 text-center">
					<a href="#" class="btn btn-lg btn-outline">
						<i class="fa fa-download"></i> Download Theme
					</a>
				</div> -->
			</div>
		</div>
	</section>

	<!-- Contact Section -->
	<!-- <section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2>Contact Me</h2>
					<hr class="star-primary">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					 To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
					<!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
					<!-- <form name="sentMessage" id="contactForm" novalidate>
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Name</label>
								<input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Email Address</label>
								<input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Phone Number</label>
								<input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Message</label>
								<textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<br>
						<div id="success"></div>
						<div class="row">
							<div class="form-group col-xs-12">
								<button type="submit" class="btn btn-success btn-lg">Send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section> -->

	<!-- Footer -->
	<footer class="text-center">
		<div class="footer-above">
			<div class="container">
				<div class="row">
					<div class="footer-col col-md-6">
						<h3>Ciudad actual</h3>
						<p>Zaragoza</p>
					</div>
					<div class="footer-col col-md-6">
						<h3>En la Web</h3>
						<ul class="list-inline">
							<li>
								<a href="https://www.linkedin.com/in/lorena-muns-falcon" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-below">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						Copyright &copy; Lorena Muns 2018
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
	<div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
		<a class="btn btn-primary" href="#page-top">
			<i class="fa fa-chevron-up"></i>
		</a>
	</div>

	<!-- Portfolio Modals -->
	<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl">
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<h2>Motor de reservas</h2>
							<hr class="star-primary">
							<div class="container col-xs-12 clearfix">
								<div id="myCarousel" class="carousel slide" data-ride="carousel">
									<!-- Indicators -->
									<ol class="carousel-indicators">
										<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel" data-slide-to="1"></li>
										<li data-target="#myCarousel" data-slide-to="2"></li>
										<li data-target="#myCarousel" data-slide-to="3"></li>
									</ol>

									<!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active"><img src="img/portfolio/motor.png" alt="motor"/></div>
										<div class="item"><img src="img/portfolio/motor2.png" alt="motor2"/></div>
										<div class="item"><img src="img/portfolio/motor3.png" alt="motor3"/></div>
										<div class="item"><img src="img/portfolio/motor4.png" alt="motor4"/></div>
									</div>

									<!-- Left and right controls -->
									<a class="left carousel-control" href="#myCarousel" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left"></span>
										<span class="sr-only">Anterior</span>
									</a>
									<a class="right carousel-control" href="#myCarousel" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right"></span>
										<span class="sr-only">Siguiente</span>
									</a>
								</div>
							</div>

							<div class="col-xs-12 clearfix">
								<p><br>Motor de reservas personalizable, responsive, fácil de integrar. <br>Pasarela de pago incluida</p>
								<ul class="list-inline item-details m-t-3">
									<li><strong>Mayo 2016</strong></li>
								</ul>
								<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl">
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<h2>Extranet de propietarios</h2>
							<hr class="star-primary">
							<div class="container col-xs-12 clearfix">
								<div id="myCarousel2" class="carousel slide" data-ride="carousel">
									<!-- Indicators -->
									<ol class="carousel-indicators">
										<li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel2" data-slide-to="1"></li>
										<li data-target="#myCarousel2" data-slide-to="2"></li>
										<li data-target="#myCarousel2" data-slide-to="3"></li>
										<li data-target="#myCarousel2" data-slide-to="4"></li>
									</ol>

									<!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active"><img src="img/portfolio/manual.png" alt="manual"/></div>
										<div class="item"><img src="img/portfolio/extranet.png" alt="manual"/></div>
										<div class="item"><img src="img/portfolio/extranet1.png" alt="manual"/></div>
										<div class="item"><img src="img/portfolio/extranet2.png" alt="manual"/></div>
										<div class="item"><img src="img/portfolio/unifomre.png" alt="manual2"/></div>
									</div>

									<!-- Left and right controls -->
									<a class="left carousel-control" href="#myCarousel2" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left"></span>
										<span class="sr-only">Anterior</span>
									</a>
									<a class="right carousel-control" href="#myCarousel2" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right"></span>
										<span class="sr-only">Siguiente</span>
									</a>
								</div>
							</div>

							<div class="col-xs-12 clearfix">
								<p><br>Extranet completa de propietario a partir de la creación del manual de estilo para la uniformidad visual, de usabilidad y buenas prácticas en el código.</p>
								<ul class="list-inline item-details m-t-3">
									<li><strong>Octubre 2017</strong></li>
								</ul>
								<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl">
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<h2>Diseño 100% mobile</h2>
							<hr class="star-primary">
							<div class="container col-xs-12 clearfix">
								<div id="myCarousel3" class="carousel slide" data-ride="carousel">
									<!-- Indicators -->
									<ol class="carousel-indicators">
										<li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel3" data-slide-to="1"></li>
										<li data-target="#myCarousel3" data-slide-to="2"></li>
										<li data-target="#myCarousel3" data-slide-to="3"></li>
									</ol>

									<!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active"><img src="img/portfolio/reserva4.png" alt="reserva"/></div>
										<div class="item"><img src="img/portfolio/reserva.png" alt="reserva"/></div>
										<div class="item"><img src="img/portfolio/reserva2.png" alt="reserva2"/></div>
										<div class="item"><img src="img/portfolio/reserva3.png" alt="reserva3"/></div>
									</div>

									<!-- Left and right controls -->
									<a class="left carousel-control" href="#myCarousel3" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left"></span>
										<span class="sr-only">Anterior</span>
									</a>
									<a class="right carousel-control" href="#myCarousel3" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right"></span>
										<span class="sr-only">Siguiente</span>
									</a>
								</div>
							</div>

							<div class="col-xs-12 clearfix">
								<p><br>Optimizado para el momento exacto en que se usa. <br>Con plugins útiles como la firma digital o lector de QR para un checkin ágil</p>
								<ul class="list-inline item-details m-t-3">
									<li><strong>Enero 2018</strong></li>
								</ul>
								<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl">
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<h2>Integraciones API</h2>
							<hr class="star-primary">
							<div class="container col-xs-12 clearfix">
								<div id="myCarousel4" class="carousel slide" data-ride="carousel">
									<!-- Indicators -->
									<ol class="carousel-indicators">
										<li data-target="#myCarousel4" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel4" data-slide-to="1"></li>
										<li data-target="#myCarousel4" data-slide-to="2"></li>
									</ol>

									<!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active"><img src="img/portfolio/api2.png" alt="reserva"/></div>
										<div class="item"><img src="img/portfolio/api.png" alt="reserva2"/></div>
										<div class="item"><img src="img/portfolio/api3.png" alt="reserva3"/></div>
									</div>

									<!-- Left and right controls -->
									<a class="left carousel-control" href="#myCarousel4" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left"></span>
										<span class="sr-only">Anterior</span>
									</a>
									<a class="right carousel-control" href="#myCarousel4" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right"></span>
										<span class="sr-only">Siguiente</span>
									</a>
								</div>
							</div>

							<div class="col-xs-12 clearfix">
								<p><br>Integración completa del sistema mediante Soap y WebHooks.<br>Integración de reservas directas por REST.<br>Integraciones REST y Soap con pasarelas de pago y TPVs.</p>
								<ul class="list-inline item-details m-t-3">
									<li><strong>2015 - 2018</strong></li>
								</ul>
								<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl">
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<h2>Sistema de gestión de tiendas online</h2>
							<hr class="star-primary">
							<div class="container col-xs-12 clearfix">
								<div id="myCarousel5" class="carousel slide" data-ride="carousel">
									<!-- Indicators -->
									<ol class="carousel-indicators">
										<li data-target="#myCarousel5" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel5" data-slide-to="1"></li>
										<li data-target="#myCarousel5" data-slide-to="2"></li>
										<li data-target="#myCarousel5" data-slide-to="3"></li>
										<li data-target="#myCarousel5" data-slide-to="4"></li>
										<li data-target="#myCarousel5" data-slide-to="5"></li>
										<li data-target="#myCarousel5" data-slide-to="6"></li>
									</ol>

									<!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active"><img src="img/portfolio/zarlo.png" alt="zarlo"/></div>
										<div class="item"><img src="img/portfolio/zarlo2.png" alt="zarlo1"/></div>
										<div class="item"><img src="img/portfolio/zarlo3.png" alt="zarlo2"/></div>
										<div class="item"><img src="img/portfolio/zarlo4.png" alt="zarlo3"/></div>
										<div class="item"><img src="img/portfolio/zarlo5.png" alt="zarlo3"/></div>
										<div class="item"><img src="img/portfolio/zarlo6.png" alt="zarlo3"/></div>
										<div class="item"><img src="img/portfolio/zarlo7.png" alt="zarlo3"/></div>
									</div>

									<!-- Left and right controls -->
									<a class="left carousel-control" href="#myCarousel5" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left"></span>
										<span class="sr-only">Anterior</span>
									</a>
									<a class="right carousel-control" href="#myCarousel5" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right"></span>
										<span class="sr-only">Siguiente</span>
									</a>
								</div>
							</div>

							<div class="col-xs-12 clearfix">
								<p><br>Proyecto realizado en mi tiempo libre, sistema de gestión integral para tiendas online.<br>Gestión de Stocks, clientes, pedidos, "carrito abandonado", estadísticas, pasarelas de pago incluidas y tienda personalizable.</p>
								<ul class="list-inline item-details m-t-3">
									<li><strong>2016 - 2017</strong></li>
								</ul>
								<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl">
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<h2>Tienda online</h2>
							<hr class="star-primary">
							<div class="container col-xs-12 clearfix">
								<div id="myCarousel6" class="carousel slide" data-ride="carousel">
									<!-- Indicators -->
									<ol class="carousel-indicators">
										<li data-target="#myCarousel6" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel6" data-slide-to="1"></li>
										<li data-target="#myCarousel6" data-slide-to="2"></li>
										<li data-target="#myCarousel6" data-slide-to="3"></li>
										<li data-target="#myCarousel6" data-slide-to="4"></li>
										<li data-target="#myCarousel6" data-slide-to="5"></li>
									</ol>

									<!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active"><img src="img/portfolio/tienda.png" alt="tienda"/></div>
										<div class="item"><img src="img/portfolio/tienda1.png" alt="tienda1"/></div>
										<div class="item"><img src="img/portfolio/tienda2.png" alt="tienda2"/></div>
										<div class="item"><img src="img/portfolio/tienda3.png" alt="tienda3"/></div>
										<div class="item"><img src="img/portfolio/tienda4.png" alt="tienda4"/></div>
										<div class="item"><img src="img/portfolio/tienda5.png" alt="tienda5"/></div>
									</div>

									<!-- Left and right controls -->
									<a class="left carousel-control" href="#myCarousel6" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left"></span>
										<span class="sr-only">Anterior</span>
									</a>
									<a class="right carousel-control" href="#myCarousel6" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right"></span>
										<span class="sr-only">Siguiente</span>
									</a>
								</div>
							</div>

							<div class="col-xs-12 clearfix">
								<p><br>Proyecto realizado en mi tiempo libre, tienda online personalizable en colores, filtros, menús...<br>Consulta de pedidos, lista de deseos, parasela de pago...</p>
								<ul class="list-inline item-details m-t-3">
									<li><strong>2016 - 2017</strong></li>
								</ul>
								<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="vendor/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<!-- Plugin JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<!-- Contact Form JavaScript -->
	<script src="js/jqBootstrapValidation.js"></script>
	<script src="js/contact_me.js"></script>

	<!-- Theme JavaScript -->
	<script src="js/freelancer.js"></script>


</body>

</html>

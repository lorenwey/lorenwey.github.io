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
	<?php include_once('includes/biografia.php');?>
	<?php include_once('includes/portfolio.php');?>

	<!-- About Section -->
	<section class="success" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2>About</h2>
					<hr class="star-light">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-lg-offset-2">
					<p>Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
				</div>
				<div class="col-lg-4">
					<p>Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
				</div>
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<a href="#" class="btn btn-lg btn-outline">
						<i class="fa fa-download"></i> Download Theme
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Contact Section -->
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2>Contact Me</h2>
					<hr class="star-primary">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
					<!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
					<form name="sentMessage" id="contactForm" novalidate>
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
	</section>

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
									<li>Fecha <strong><a href="http://startbootstrap.com">Mayo 2016</a></strong></li>
									<li>Dirigido a <strong><a href="http://startbootstrap.com">Alojamientos y portales integrados</a></strong></li>
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
									</ol>

									<!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active"><img src="img/portfolio/manual.png" alt="manual"/></div>
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
									<li>Fecha <strong><a href="http://startbootstrap.com">Octubre 2017</a></strong></li>
									<li>Dirigido a <strong><a href="http://startbootstrap.com">Alojamientos rurales</a></strong></li>
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
									</ol>

									<!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active"><img src="img/portfolio/reserva.png" alt="reserva"/></div>
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
									<li>Fecha <strong><a href="http://startbootstrap.com">Enero 2018</a></strong></li>
									<li>Dirigido a <strong><a href="http://startbootstrap.com">Alojamientos rurales</a></strong></li>
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
							<h2>Project Title</h2>
							<hr class="star-primary">
							<img src="img/portfolio/game.png" class="img-responsive img-centered" alt="">
							<p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
							<ul class="list-inline item-details">
								<li>Client:
									<strong><a href="http://startbootstrap.com">Start Bootstrap</a>
									</strong>
								</li>
								<li>Date:
									<strong><a href="http://startbootstrap.com">April 2014</a>
									</strong>
								</li>
								<li>Service:
									<strong><a href="http://startbootstrap.com">Web Development</a>
									</strong>
								</li>
							</ul>
							<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
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
							<h2>Project Title</h2>
							<hr class="star-primary">
							<img src="img/portfolio/safe.png" class="img-responsive img-centered" alt="">
							<p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
							<ul class="list-inline item-details">
								<li>Client:
									<strong><a href="http://startbootstrap.com">Start Bootstrap</a>
									</strong>
								</li>
								<li>Date:
									<strong><a href="http://startbootstrap.com">April 2014</a>
									</strong>
								</li>
								<li>Service:
									<strong><a href="http://startbootstrap.com">Web Development</a>
									</strong>
								</li>
							</ul>
							<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
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
							<h2>Project Title</h2>
							<hr class="star-primary">
							<img src="img/portfolio/submarine.png" class="img-responsive img-centered" alt="">
							<p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
							<ul class="list-inline item-details">
								<li>Client:
									<strong><a href="http://startbootstrap.com">Start Bootstrap</a>
									</strong>
								</li>
								<li>Date:
									<strong><a href="http://startbootstrap.com">April 2014</a>
									</strong>
								</li>
								<li>Service:
									<strong><a href="http://startbootstrap.com">Web Development</a>
									</strong>
								</li>
							</ul>
							<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
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

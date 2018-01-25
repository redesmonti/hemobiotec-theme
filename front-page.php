<?php get_header(); ?>
	<section name="slider">
		<?php include_once( 'slider.php' ); ?>

	</section>

	<!--- botones laboratorio y equipo -->
	<div class="contenedor-botones container-fluid">
		<div class="col-md-6 laboratorio">
			<div class="wow fadeInLeft">
				<h2>Conozca Nuestro Laboratorio</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ab quidem maxime blanditiis ad alias distinctio.</p>
				<button class="ver-paginas"><a href="http://pruebabrother.96.lt/hemobiotec/nuestro-laboratorio/"> Ver más</a></button>
			</div>
		</div>
		<div class="col-md-6 equipo">
			<div class="wow fadeInRight">
				<h2>Conozca Nuestro Equipo</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ab quidem maxime blanditiis ad alias distinctio</p>
				<button class="ver-paginas"><a href="http://pruebabrother.96.lt/hemobiotec/nuestro-equipo/"> Ver más</a></button>
			</div>
		</div>
	</div>	
		<!--- Sección Beneficios -->
	<div class="contenedor-beneficios container-fluid">
		<div class="gris"></div>
		<div class="col-md-12">
			<h2>Beneficios del Tratamiento</h2>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12 imagen">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/pupila.png" alt="" class="wow zoomIn">
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12 beneficios">
			<h3>Beneficio n°1</h3>
			<p class="wow fadeInUp">Sustitutos biológicos de la lágrima</p>
			<h3>Beneficio n°2</h3>
			<p class="wow fadeInUp">Productos autólogos, sin preservantes ni elementos tóxicos</p>
			<h3>Beneficio n°3</h3>
			<p class="wow fadeInUp">Indicado para pacientes con enfermedades complejas de la superficie ocular</p>
		</div>
	</div> 
	<!--- Contenedor premio -->
	<div class="contenedor-premio container-fluid">
		<div class="texto wow fadeInUp col-md-6">
			<h2> Premio 2013 Desafío Salud Gestiona</h2>
			<p>Primer lugar en el concurso “Desafío Salud Gestiona” de la Subsecretaría de redes Asistenciales del Ministerio de Salud, destinado a premiar iniciativas que mejoran procesos en los Hospitales, y que significan un reconocimiento a la capacidad de análisis, creatividad, innovación y mejoramiento en la gestión de los procesos desarrollados y ejecutados por funcionarios de los establecimientos hospitalarios. </p>
			<button class="ver-paginas"><a href="http://pruebabrother.96.lt/hemobiotec/premio/">Ver más sobre su historia</a></button>	
		</div>
		<div class="logo-gob col-md-6">
			<div class="col-md-12 logo-gob">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/logo-gob.png" alt="">	
			</div>
			<div class="col-md-12 colores">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/gob.png" alt="">	
			</div>
			
		</div>
	</div>
	<!-- sección noticias-->
	<section id="noticias" class="smooth-scroll">

	    <?php include_once( 'noticias.php' ); ?>

	</section>
	<!-- contenedor mapa -->
	<section class="contenedor-mapa wow fadeIn">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.6443904207827!2d-73.04837828470937!3d-36.827040479943086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9669b5d3d712fcdb%3A0x37f63556cdb45580!2zQ2FzdGVsbMOzbiAzMTYsIENvbmNlcGNpw7NuLCBSZWdpw7NuIGRlbCBCw61vIELDrW8!5e0!3m2!1ses!2scl!4v1516367011396" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
	</section>

<?php get_footer(); ?>
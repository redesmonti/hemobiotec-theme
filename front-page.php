<?php get_header(); ?>
	<div id="carousel-example-generic" class="carousel slide slider-principal" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>
	  	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img src="<?php echo get_template_directory_uri(); ?>/assets/slider1.png" alt="...">
	      <div class="carousel-caption">
	      	<div class="titulo-principal">
	      		<h1>Título Principal</h1>
	      		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  </p>
	      		<button>Ver más</button>
	      	</div>
	      </div>
	    </div>
	  </div>
	    <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>	

	<!--- botones laboratorio y equipo -->
	<div class="contenedor-botones container-fluid">
		<div class="col-md-6 laboratorio">
			<div class="wow fadeInLeft">
				<h2>Conozca Nuestro Laboratorio</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ab quidem maxime blanditiis ad alias distinctio.</p>
				<button>Ver más</button>
			</div>
		</div>
		<div class="col-md-6 equipo">
			<div class="wow fadeInRight">
				<h2>Conozca Nuestro Equipo</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ab quidem maxime blanditiis ad alias distinctio</p>
				<button>Ver más</button>
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
			<p class="wow fadeInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nostrum molestias eius aliquam mollitia sint dolores suscipit.</p>
			<h3>Beneficio n°2</h3>
			<p class="wow fadeInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nostrum molestias eius aliquam mollitia sint dolores suscipit.</p>
			<h3>Beneficio n°3</h3>
			<p class="wow fadeInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nostrum molestias eius aliquam mollitia sint dolores suscipit.</p>
		</div>
	</div> 
	<!--- Contenedor premio -->
	<div class="contenedor-premio container-fluid">
		<div class="texto wow zoomIn col-md-6">
			<h2> Premio 2013 Salud Innova</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam aut explicabo praesentium.</p>
			<button>Ver más</button>	
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
	
<?php get_footer(); ?>
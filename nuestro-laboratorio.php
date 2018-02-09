<?php 
/*
Template Name: Nuestro Laboratorio
*/
?>
<?php get_header(); ?>
<div class="container noticia">
	<h1>Nuestro Laboratorio</h1>
	<div class="contenedor-entradas">
		<div class="fondo-blanco">
			<div class="titulo"><h2>Laboratorio</h2></div>
			<hr>
			<div class="descripcion-paginas">
				<p>
					Lo invitamos a familiarizarse con nuestras instalaciones.
					<br>
					<br>
					<?php echo photo_gallery(1); ?>
					
				</p>		
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
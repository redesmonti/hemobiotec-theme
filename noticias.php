<div class="contenedor-noticias container-fluid ">
	<h2>Artículos</h2>
	<div class="bloque-noticias container">
		<?php 
              $args = array(
              'post_per_page'=> '4',
              'showposts' => '3', //numero de noticias que treara
              'orderby' => 'date', 
              'order' => 'DESC',
              );
              $my_query = new WP_Query($args); 
              if( $my_query->have_posts() ) : ?>
              <?php $i = 1; while ($my_query->have_posts()) : $my_query->the_post(); ?>
              <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
              <?php if(!empty($url)){ ?>
                <div class="col-md-4">
                  <div class="tarjeta-noticia">
                    <div class="imagen wow zoomIn">
                      <?php  if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => 'img-responsive')); }?>
                    </div>
                    <h3><?php the_title(); ?></h3>
                    <div class="descripcion"><?php the_excerpt(); ?></div>
                    
                    <a href="<?php the_permalink(); ?>">Leer más</a> 
                  </div>
                  
                     
                </div>
              <?php } ?>
              <?php $i++;endwhile; endif; ?>
	<button class="ver-noticias"><a href="http://pruebabrother.96.lt/hemobiotec/ver-noticias/"> Ver más noticias</a></button>	
	</div>

</div>
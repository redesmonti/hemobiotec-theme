<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <?php wp_head(); ?>
</head>
<body><!--se cierra en footer.php-->
	<header class="site-header">
	    <nav class="navegacion navbar-fixed-top" id="navbarjs" role="navigation">
	    	<div class="contenedo-contacto">
	          <a href="tel:412108607"><i class="fa fa-phone" aria-hidden="true"></i> 41-2108607</a>
	      	</div>
	        <div class="container">
	          <div class="navbar-header"> 
	            <div class="navbar-brand">
	              <a href="<?php bloginfo('url'); ?>">
	              	<img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="">
	              </a>  
	            </div> 
	            <button type="button" class="navbar-toggle smooth-scroll" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
	              <span class="sr-only">Toggle navigation</span> 
	              <span class="icon-bar"></span> 
	              <span class="icon-bar"></span> 
	              <span class="icon-bar"></span> 
	            </button>  
	          </div>
	          <div class="smooth-scroll collapse navbar-collapse navbar-right navbar-ex1-collapse">
	            <?php wp_nav_menu( array( 
	              'theme_location' => 'navigation',
	              'depth' => 2,
	              'container' => false,
	              'container_id' => 'navbar',
	              'container_class' => 'collapse navbar-collapse', 
	              'menu_class' => 'nav navbar-nav navbar-left',
	              'walker' => new WP_Bootstrap_Navwalker() ) ); ?>    
	          </div>
	        </div>        
	    </nav><!-- fin navegacion-->
	</header>
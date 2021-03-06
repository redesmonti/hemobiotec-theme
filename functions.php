<?php

function hemobiotec_styles(){
  wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/css/normalize.css');
  wp_enqueue_style('bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");
  //wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css');
  wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.css');
  wp_enqueue_style( 'animate', get_stylesheet_directory_uri() . '/css/animate.css' );
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrapjs', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", array('jquery'), true);
  wp_enqueue_script( 'wow', get_stylesheet_directory_uri() . '/js/wow.min.js', array(), '', true );
  //wp_enqueue_style('slider', get_stylesheet_directory_uri() . '/css/slider.css');
  wp_enqueue_script('jquery');
  wp_enqueue_style('footer', get_stylesheet_directory_uri() . '/css/footer.css');
  wp_enqueue_style('style', get_stylesheet_uri()); //usa el style.css, debe ser la ultima hoja de estilos

  //slider
  wp_enqueue_script('index', get_stylesheet_directory_uri() . '/js/index.js', array(), '', true);

}
add_action('wp_enqueue_scripts', 'hemobiotec_styles'); //Hook para llamar al la funcion en wordpress

//* Enqueue script to activate WOW.js
add_action('wp_enqueue_scripts', 'sk_wow_init_in_footer');
function sk_wow_init_in_footer() {
  add_action( 'print_footer_scripts', 'wow_init' );
}
//* Add JavaScript before </body>
function wow_init() { ?>
  <script type="text/javascript">
    new WOW().init();
  </script>
<?php }

/*Menus*/

require_once('wp-bootstrap-navwalker.php');
//Permite agregar los menus
function mis_menus() {
  register_nav_menus(
    array(
      'navigation' => __( 'Menú de navegación de hemobiotec'),
    )
  );
}
add_action( 'after_setup_theme', 'mis_menus' );

/*Añadir imagen destacada*/
add_theme_support( 'post-thumbnails' );


function mis_widgets(){
 register_sidebar(
   array(
       'name'          => __( 'Sidebar' ),
       'id'            => 'sidebar',
       'description'   => 'Widget para las paginas interiores de hemobiotec',
       'before_widget' => '<div id="%1$s" class="widget">',
       'after_widget'  => '</div>',
       'before_title'  => '<h3 class="widget-tittle">',
       'after_title'   => '</h3>',
   )
 );
}
add_action('init','mis_widgets');




?>
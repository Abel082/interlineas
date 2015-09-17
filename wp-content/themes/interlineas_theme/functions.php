<?php 
 

/*  Configuración del tema */

function tema_config(){
	 

/* Añade los thumbnails */

	add_theme_support( 'post-thumbnails' ); 
	add_theme_support( 'post-formats' ); 
	add_theme_support( 'custom-background' ); 
	add_theme_support( 'custom-header' ); 
	add_theme_support( 'html5' ); 
}


 add_action( 'after_setup_theme', 'tema_config' );


/* añadimos la hoja de estilos*/

function on__style(){
    wp_enqueue_style('style-theme', get_bloginfo('stylesheet_url'), false, false, 'screen');
    //wp_enqueue_style('960', get_bloginfo('template_url').'/_inc/css/960.css','style-theme');
   // wp_enqueue_style('jquery-ui', get_bloginfo('template_url').'/_inc/css/jquery-ui.custom/ jquery-ui.custom.css','style-theme');
}
add_action('wp_print_styles', 'on__style');



/* Menus
–––––––––––––––––––––––––––––––––––––––––––––––––– */
 
 
  function byadr_register_menus() {

      register_nav_menus(
        array(
      'header-menu' =>  __( 'Menu Principal', 'byadr' ),
      'secondary-menu' => __( 'Menu Secundario', 'byadr' ),
      'footer-menu' => __( 'Menu Footer', 'byadr' ),
      'mobile-menu' => __( 'Menu Mobile', 'byadr' )
        )
    );

  }

  add_action( 'init', 'byadr_register_menus' );

  

 




 
/*insertamos las zonas de widgets*/

add_action( 'widgets_init', 'theme_slug_widgets_init' );

function theme_slug_widgets_init() {

    register_sidebar( array(
        'name'      => __( 'Sidebar', 'theme-slug' ),
        'id'      => 'sidebar',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => "</li>",
    ) );

    register_sidebar( array(
        'name' 			=> __( 'Interlineas - tres columnas', 'theme-slug' ),
        'id' 			=> 'tres_col',
        'description' 	=> __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
       	'before_title'  => '<h4>',
    		'after_title'   => '</h4>',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => "</li>",
    ) );

    register_sidebar( array(
        'name'      => __( 'Menu Footer', 'theme-slug' ),
        'id'      => 'footer_menu',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li>',
        'after_widget'  => '</li>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
      
}

/* asi creamos custom post types */

add_action( 'init', 'create_post_type' );
function create_post_type() {
      register_post_type( 'categorias',
        array(
          'labels' => array(
            'name' => __( 'Categorías' ),
            'singular_name' => __( 'categorias' )
          ),
          'public' => true,
          'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
          'has_archive' => true,
        )
      );



     

}


/* insertamos las fuentas de google fonts */

function load_fonts() {
            wp_register_style('et-googleFonts', 'https://fonts.googleapis.com/css?family=Roboto:300italic,100,300,500,400');
            wp_enqueue_style( 'et-googleFonts');
        }
    add_action('wp_print_styles', 'load_fonts');



  


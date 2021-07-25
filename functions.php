<?php

/**
* Fuctions and definitions
*
* @package WordPress
* @subpackage Union
* @since 1.0
* @version 1.0
*/

// Requerendo o arquivo do Customizer
require get_template_directory(). '/inc/customizer.php';

// Requerendo os CPTs
require get_template_directory() . '/inc/cpts.php';

// Requerendo o Custom Navigation Walker - Customizador do menu para o bootstrap 4.0
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

// Requerendo o arquivo dos Widgets
require get_template_directory(). '/inc/widgets.php';

// Carregar scripts e folhas de estilo
function load_scripts(){
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '4.4', true );
	wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css', array(), '4.4', 'all');
  wp_enqueue_style('catamaran', 'https://fonts.googleapis.com/css?family=Catamaran:400,700,800', array(), null, 'all');
	wp_enqueue_style('jaldi', 'https://fonts.googleapis.com/css?family=Jaldi:400,700', array(), null, 'all');
	wp_enqueue_style('better-nav-css', 'https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css', array(), null, 'all');	
	wp_enqueue_style('fontawesome', get_template_directory_uri().'/assets/fonts/fontawesome-all.min.css', array(), null, 'all');
	wp_enqueue_style('scroll-to-top', get_template_directory_uri().'/assets/css/scrollToTop.css', array(), null, 'all'); 
	wp_enqueue_style('owl-carousel', get_template_directory_uri().'/assets/css/owl/owl.carousel.min.css','1.0','all');
	wp_enqueue_style('owl-theme', get_template_directory_uri().'/assets/css/owl/owl.theme.default.min.css','1.0','all');
	wp_enqueue_style('template', get_template_directory_uri().'/assets/css/styles.css','1.0','all'); 
	wp_deregister_script('jquery');
  wp_register_script('jquery', get_template_directory_uri().'/assets/js/jquery.min.js', null, '1.0', true );
	wp_enqueue_script('scroll-slow', get_template_directory_uri().'/assets/js/scrollSlow.js', null, '1.0', true );	
	wp_enqueue_script('scroll-to-top', get_template_directory_uri().'/assets/js/scroolToTop.js', null,  '1.0' , true );
	wp_enqueue_script('better-nav-js', get_template_directory_uri().'/assets/js/betternav.js', null, '1.0', true );
	wp_enqueue_script('owl-carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js', null, '1.0', true );
	wp_enqueue_script('jquery-mask', get_template_directory_uri().'/assets/js/jquery.mask.min.js', null, '1.0', true );
	wp_enqueue_script('main', get_template_directory_uri().'/assets/js/scripts.js', null,  '1.0' , true );
}

// Dispara o Hook com os scripts e os estilos
add_action('wp_enqueue_scripts', 'load_scripts');

// Função de configuração do Tema
function unifarm_config() {
	// Registrando nossos menus
	register_nav_menus(
		array(
			'main_menu' => 'Main Menu',
			'footer_menu' => 'Footer Menu',
			'my_main_menu_interno' => 'Main Menu Interno',
			'footer_menu_interno' => 'Footer Menu Interno',
		)
	);

	// Tamanhos Padrão de Imagens
	add_image_size('slider', 1920, 1080, true);
	add_image_size('thumb', 340, 200, true);

  // Adiciona metabox de formato de Post com as opcoes no array
	add_theme_support('post-formats',  array( 'video', 'image') );

  // Adiciona a metabox de imagem destacada no editor de Posts
	add_theme_support( 'post-thumbnails'); 

  // Carrega os dados Title do Site em todas as páginas
	add_theme_support('title-tag'); 

}

// Dispara o Hook com os Menus e a customização do Gutemberg
add_action('after_setup_theme','unifarm_config', 0 );


?>
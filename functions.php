<?php

/* Suportes do tema *********************************************************/
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', array( 'aside','quote','link','status') );

$defaults = array(
	'flex-width'    => true,
	'width'         => 900,
	'flex-height'    => true,
	'height'        => 200,
	'uploads'       => true
);
add_theme_support( 'custom-header', $defaults );


// Aciona o arquivo de criação do post personalizado
require_once(get_template_directory().'/posts_personalizados/livros.php'); 
require_once(get_template_directory().'/posts_personalizados/autores.php'); 


if ( function_exists('register_sidebar') ) {
register_sidebar(array(
'name' => 'First Sidebar',
'id' => 'first-sidebar',
'description' => 'First Start Screen Sidebar',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>',
));
}

function register_menu() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' )
    )
  ); 
}
add_action( 'init', 'register_menu' );

?>
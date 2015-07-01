<?php 
function registrar_post_personalizado_autor() {

$labels = array( 
  'name' => __( 'Autores', 'playsteve' ),
  'singular_name' => __( 'Autor', 'playsteve' ),
  'add_new' => __( 'Adicionar Novo', 'playsteve' ),
  'add_new_item' => __( 'Adicionar Novo Autor', 'playsteve' ),
  'edit_item' => __( 'Editar Autor', 'playsteve' ),
  'new_item' => __( 'Novo Autor', 'playsteve' ),
  'view_item' => __( 'Ver Lista de Autores', 'playsteve' ),
  'search_items' => __( 'Encontrar Autores', 'playsteve' ),
  'not_found' => __( 'Nenhum Autor foi encontrado', 'playsteve' ),
  'not_found_in_trash' => __( 'Nenhum Autor foi encontrado nos itens excluídos', 'playsteve' ),
  'parent_item_colon' => __( 'Pai do Autor:', 'playsteve' ),
  'menu_name' => __('Autores', 'playsteve'),

);

$args = array( 
  'labels' => $labels,
  'hierarchical' => false,
  'description' => 'Autores para leitura infantil',
  'supports' => array( 'title', 'editor', 'thumbnail','post-formats'),
  'public' => true,
  'show_ui' => true,
  'show_in_menu' => true,
  'menu_position' => 6,
  'show_in_nav_menus' => true,
  'publicly_queryable' => true,
  'exclude_from_search' => false,
  'has_archive' => true,
  'query_var' => true,
  'can_export' => true,
  'rewrite' => true,
  'capability_type' => 'post'
);
register_post_type( 'autores', $args );
}

add_action( 'init', 'registrar_post_personalizado_autor' );
?>
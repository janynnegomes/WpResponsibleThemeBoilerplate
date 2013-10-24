<?php 
function registrar_post_personalizado_livro() {
$labels = array( 
 'name' => __( 'Livros', 'playsteve' ),
 'singular_name' => __( 'Livro', 'playsteve' ),
 'add_new' => __( 'Adicionar Novo', 'playsteve' ),
 'add_new_item' => __( 'Adicionar Novo Livro', 'playsteve' ),
 'edit_item' => __( 'Editar Livro', 'playsteve' ),
 'new_item' => __( 'Novo Livro', 'playsteve' ),
 'view_item' => __( 'Ver Lista de Livros', 'playsteve' ),
 'search_items' => __( 'Encontrar Livros', 'playsteve' ),
 'not_found' => __( 'Nenhum livro foi encontrado', 'playsteve' ),
 'not_found_in_trash' => __( 'Nenhum livro foi encontrado nos itens excluídos', 'playsteve' ),
 'parent_item_colon' => __( 'Pai do Livro:', 'playsteve' ),
 'menu_name' => __('Livros', 'playsteve'),
);

$args = array( 
 'labels' => $labels,
 'hierarchical' => false,
 'description' => 'Livros para leitura infantil',
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

register_post_type( 'livros', $args );
}

add_action( 'init', 'registrar_post_personalizado_livro' );?>
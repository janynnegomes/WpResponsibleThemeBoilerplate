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
  'taxonomies' => array('genero'),
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
<?php add_action( 'add_meta_boxes', 'metabox_informacoes_do_livro' );

function metabox_informacoes_do_livro() {
    add_meta_box(
    'livro_metaboxid',
    'Informações do Livro',
    'conteudo_metabox_informacoes_do_livro',
    'livros',
    'side');
}

function conteudo_metabox_informacoes_do_livro( $livro) {
    
    global $post; ?>
    <p class="misc-pub-section">
      <label for="data_lancamento">Lançado em : </label>
      <input type="date" name="data_lancamento" value="<?php echo get_post_meta( $livro->ID, '_data_lancamento', true ); ?>"></input>
    </p>

    <p>
      <label for="nota_avaliacao">Avaliação : </label>
      <input type="number" max="5" min="1" name="nota_avaliacao" value="<?php echo get_post_meta( $livro->ID, '_nota_avaliacao', true ); ?>"></input>
      <label >(de  1 a 5)</label>
    </p>
<?php } ?>
<?php add_action( 'save_post', 'salva_informacoes_livro', 10, 2 );
 
function salva_informacoes_livro($livro_id){

  if (get_post_type( $livro_id ) == 'livros') 
  {
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
    return  $livro_id ;

    if(isset($_POST['nota_avaliacao']))
    {
      update_post_meta( $livro_id, '_nota_avaliacao', strip_tags( $_POST['nota_avaliacao'] ) );
    }

    if(isset($_POST['data_lancamento']))
    {
      update_post_meta( $livro_id, '_data_lancamento', strip_tags( $_POST['data_lancamento'] ) );
    }
    
    $autores = '';

   
      if (is_array($_POST['autores']) ){

        foreach($_POST['autores'] as $value)
        {
           array_push($autores, strip_tags($value));
        }
        $autores = join(',',$autores);
      }
      else
      {
        $autores = strip_tags($_POST['autores']);
      }


      update_post_meta( $livro_id, '_autores', $autores);
   
    return true;
  }
}
?>
<?php add_action( 'add_meta_boxes', 'metabox_autores_do_livro' );

function metabox_autores_do_livro() {
    add_meta_box(
    'autorlivro_metaboxid',
    'Autores do Livro',
    'conteudo_metabox_autores_do_livro',
    'livros',
    'side');
}

function conteudo_metabox_autores_do_livro( $livro) {?>
    <p>
      <label for="autores">Autores : </label>
    </p>

    <p><ul>
      <?php $autores = get_posts(array('post_type' => 'autores',
                  'orderby' => 'title',
                  'order' => 'ASC'));

            $listaAutoresLivro = get_post_meta( $livro->ID, '_autores', true);

            $listaAutoresLivro = explode(',', $listaAutoresLivro);?>
          
            <?php foreach ($autores as $autor) {                    
                    $selecionado = in_array($autor->ID, $listaAutoresLivro)?'CHECKED':'';?>                
                    <li><input type="checkbox" name="autores[]" value="<?php echo get_the_ID();?>" <?php echo $selecionado;?> ><?php echo $autor->post_title;?></li>                  
            <?php } ?>
          
           
        </ul>
    </p> <?php wp_reset_query(); ?> 
<?php } ?>

<?php add_action( 'init', 'taxonomia_genero', 0 );
function taxonomia_genero() {
    register_taxonomy('genero', 'genero', array(
        'hierarchical' => true,
        'labels' => array(
            'name' =>  __('Gênero', 'playsteve'),
            'singular_name' => __('Gênero', 'playsteve'),
            'search_items' =>  __('Gênero', 'playsteve'),
            'all_items' => __('Gêneros', 'playsteve'),
            'parent_item' => __('Gênero Pai', 'playsteve'),
            'parent_item_colon' => __('Gênero Pai', 'playsteve'),
            'edit_item' => __('Alterar Gênero', 'playsteve'),
            'update_item' => __('Atualizar Gênero', 'playsteve'),
            'add_new_item' => __('Adicionar Novo Gênero', 'playsteve'),
            'new_item_name' => __('Novo Gênero', 'playsteve'),
            'menu_name' => __( 'genero' ),
            'show_ui' => true,
            'separate_items_with_commas' => __( 'Gênero do Filme')),
            'rewrite' => true,
            'with_front' => true, 
            'update_count_callback' => 'atualiza_autornoticia' //Atualiza
        )
    );
    }

add_filter( 'manage_edit-livros_columns', 'colunas_livros' ) ;

function colunas_livros( $colunas ) {

$colunas = array(
  'cb' => '<input type="checkbox" />',
  'title' => __('Nome', 'playsteve'),
  'autores' => __('Autores','playsteve'),
  'data_lancamento' => __('Data de Lançamento', 'playsteve'),
  'genero' => __('Gênero', 'playsteve'),
  'nota' => __('Avaliação', 'playsteve'),
  'thumbnail' => __('Capa', 'playsteve')
);
return $colunas;
}
add_action( 'manage_livros_posts_custom_column', 'gerencia_colunas_livros', 10, 2 );

function gerencia_colunas_livros( $coluna, $post_id ) {
    
        switch( $coluna ) {

            case 'data_lancamento':

            $data_lancamento = get_post_meta( $post_id, '_data_lancamento', true );
            
            if(empty($data_lancamento)){echo 'Sem data de lançamento';}
            else
            { echo date('d/m/Y',strtotime($data_lancamento));}

            break;

            case 'nota':

            $nota = get_post_meta( $post_id, '_nota_avaliacao', true );
            
            echo $nota;

            break;            

            case 'genero' :
            
              $terms = get_the_terms( $post_id, 'genero' );

              if ( !empty( $terms ) ) {

                $out = array();

                foreach ( $terms as $term ) {
                $out[] = sprintf( '<a href="%s">%s</a>',

                esc_url( add_query_arg( 
                  array('post_type' => get_post_type( $post_id ),
                        'genero' => $term->slug ), 
                        'edit.php' ) ),

                esc_html( sanitize_term_field( 
                  'name', 
                  $term->name, $term->term_id, 
                  'genero', 
                  'display' ) )
                );
                }
                echo join( ', ', $out );
              }
              
            break;  

            case 'autores':

            $listaAutoresLivro = get_post_meta( $post_id, '_autores', true);

            $listaAutoresLivro = explode(',', $listaAutoresLivro);
            

            $listaAutoresLivro = get_posts(  
              array(
                      'post_type' => 'autores',
                      'post__in' => $listaAutoresLivro
                   )
            );
            echo '<ul>';
            foreach ($listaAutoresLivro as $autor) {
              echo '<li>'.$autor->post_title.'</li>';
            }
            echo '</ul>';

            wp_reset_query();  

            break;

            case 'thumbnail':
              if(has_post_thumbnail($post_id))
              {
                echo get_the_post_thumbnail($post_id,'thumbnail');
              }
            break;
  } 
}?>
<?php 
function gerenciar_post_admin_livro() {
   
    global $typenow;

    if($typenow == 'livros')
    { 
       $idAutor = isset($_GET["autor"])? $_GET["autor"]: '0';

       query_posts(array('post_type' => 'autores',
                  'orderby' => 'title',
                  'order' => 'ASC'));?>
           
          <select name="autor" id="autor" class="postform">
          <option value="0">Todos os Autores</option>
          <?php while (have_posts()){
                  the_post();
                  $selecionado = get_the_ID() == $idAutor?'SELECTED':'';?>                
                  <option 
                  <?php echo $selecionado;?>
                  value="<?php echo get_the_ID();?>">
                      <?php the_title();?>
                  </option>
          <?php } ?>
          </select>
          <?php wp_reset_query();    
    }
}
add_action( 'restrict_manage_posts', 'gerenciar_post_admin_livro' );

function converter_filtro_admin_livros($query) {
    global $pagenow;
    global $typenow;

    $qv = &$query->query_vars;
    if ($pagenow=='edit.php') {

        if(isset($qv['post_type'])){            
           switch ($qv['post_type']) {

                case 'livros':

                   $idAutor = isset($_GET["autor"])? $_GET["autor"]: '0';
                
                    if($idAutor != null && intval($idAutor) > 0 && $typenow == 'livros')
                    {
                     
                      $qv['meta_query'] = array(
                                        array('key'=>'_autores',
                                              'value'   => $idAutor ,
                                              'compare' => 'LIKE'));                    
                    }
                break;              
                
           }           
        }      
    }
}

add_filter('parse_query','converter_filtro_admin_livros');?>
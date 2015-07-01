<?php get_header();

    $tag = get_query_var('tag');

    $args = array('post_type' => array('noticiasmovimento','noticiasigreja'),
            'tag'=>$tag,
            'posts_per_page' => $paginacao,
            'paged'          => $paged
        );
        

    query_posts( $args ); 

    GLOBAL $wp_query;

    $count = $wp_query->found_posts; ?>
     
        <section id="wrap" style="min-height: 1300px;">
            
             <section id="main-content">     
                        
              <section class="formations">
                    <div class="list">
                       
                        <h1>Tags para <?php single_tag_title(); ?> </h1>                  
                        <ul>                            
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

                            global $post; ?>
                            <li>
                                <figure>
                                     <?php echo '<a href="'.get_permalink($post->ID).'">';?>
                                     <?php echo  getImagem($post->ID,  array(170,130), null, 'listagem'); ?></a>
                                </figure>
                                
                                <div>
                                    <time>
                                        <div></div>
                                        <?php echo FormatarData($post->post_date) ;?> 
                                    </time>
                                    
                                    <?php echo '<a href="'.get_permalink($post->ID).'">';?>
                                    <?php echo get_rcc_excerpt($post->post_title,55); ?></a>
                                    
                                    <span>
                                        <?php echo  get_rcc_excerpt($post->post_content, 150); ?>
                                    </span>

                                   
                                     
                                </div>
                            </li>
                            <?php endwhile; else: ?>
         
            <?php endif; ?>  
                        </ul>
                    </div>
                    
                </section>                
               </div> 
            </section>
            
       <?php get_sidebar('interna'); ?>
        
        </section>
           
    
    </div>

<?php get_footer(); ?>
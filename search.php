<?php get_header();

    $paged =  $_GET["pagina"] !== null ? $_GET["pagina"]: 1;  

    ?>
   
        <section id="wrap" style="min-height: 1300px;">
            
             <section id="main-content">
    
              <section class="formations">
                    <div class="list">                        
                        <h1>Busca</h1>
                     

<?php get_template_part( 'templates/loop-search' ); ?>
                    </div>
                    
                </section> 
              
               </div> 
            </section>
            
                
            
       <?php get_sidebar('interna'); ?>
        
        </section>
           
    
    </div>
<?php get_footer(); ?>
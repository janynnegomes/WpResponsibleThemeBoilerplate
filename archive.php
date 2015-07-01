<?php
/*
Template Name: All posts
*/
?>

<?php $tipopagina = get_post_type( get_the_ID()); 



 get_header(); ?>

     
        <section id="wrap" style="min-height: 1300px;">
            <section id="main-content">
    
                <section class="single">
                    
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                	
                	<?php if($tipopagina == 'bispo'){ ?>


					<div class="agenda-rccmg-header">
                        <span class="ministerio-icon"></span>
                       <?php the_title(); ?>
                    </div>
                            
                    <div class="single-content">
                        <?php echo  get_the_post_thumbnail($ID,  array(400,400)); ?>
                          
                        <p><?php the_content(); ?></p>                      
                    </div>

					<?php } ?>

                	
                                 
                     
            <?php endwhile; else: ?>
                <h1>Not found <span>:(</span></h1>
            <p>Sorry, but the page you were trying to view does not exist.</p>
            <p>It looks like this was the result of either:</p>
            <ul>
                <li>a mistyped address</li>
                <li>an out-of-date link</li>
            </ul>
            <script>
                var GOOG_FIXURL_LANG = (navigator.language || '').slice(0,2),GOOG_FIXURL_SITE = location.host;
            </script>
            <script src="//linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>          
            <?php endif; ?>                   
                  
                    
                </section>
                
            </section>               
            
       <?php get_sidebar('interna'); ?>
    
   

<?php get_footer(); ?>
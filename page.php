<?php get_header();?>
<section id="wrap-content">
    
    <section id="wrap-single-content"> 
    <?php 
        if ( have_posts() ) {
            while ( have_posts() )
            {
                the_post(); ?>

                <section id="single-content">  
                    <section id="breadcrumbs">                       
                    <?php 
                        if(function_exists('bcn_display')) {bcn_display();}
                    ?>        
                    </section>

                    <article>
                        
                        <h3><?php the_title(); ?></h3> 

                        <section class="post-header-info">
                            <time><?php the_time('d/m/Y'); ?></time>
                            |
                            <?php edit_post_link(); ?>
                        </section>

                        <figure>
                            <?php echo  get_the_post_thumbnail(get_the_ID()); ?>
                        </figure>
                        
                        <?php the_content(); ?>    

                        <?php if(has_tag()){?>
                        <div class="tags"><?php the_tags('Tags:',' ');?></div>
                        <?php } ?>  

                    </article>
                </section>    
                <?php comments_template();  ?>
    <?php   } 
        }?>
    </section>

<?php get_sidebar('first'); ?>
</section> 

<?php get_footer();?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>
            <?php if (is_home() || is_404() ){
                bloginfo('name');
            }elseif (is_category()){
                single_cat_title(); echo ' -  ' ; bloginfo('name');
            }elseif (is_single()){
                single_post_title();
            }elseif (is_page()){
                bloginfo('name'); echo ': '; single_post_title();
            }           
            else {
                wp_title('',true);
            } ?>
        </title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <style type="text/css" media="screen">            
            @import url( <?php bloginfo('stylesheet_url'); ?> );
        </style>        
       
        <?php wp_head(); ?>
    </head>

    <body>  
        <section id="general-wrap" >    
        
        <header>
            <div id="header-content">    
                <h1><?php bloginfo('name'); ?> </h1> 
                <h4><?php bloginfo('description'); ?> </h4> 
                <figure>
                <img    src="<?php header_image(); ?>" 
                        height="<?php echo get_custom_header()->height; ?>" 
                        width="<?php echo get_custom_header()->width; ?>" 
                        alt="<?php bloginfo('description'); ?>" />  
                </figure>            
            </div>       
        </header>
        
        <div id="general-wrap-content">  
          <?php get_template_part( 'main', 'menu' );  ?>
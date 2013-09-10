<?php get_header();?>    

<section id="slider">
    <article>
        <figure>Slider 1</figure>
    </article>        
    <article>
        <figure>Slider 2</figure>
    </article> 
    <article>
        <figure>Slider 3</figure>
    </article>   
</section>

<section id="corpo">
	<?php query_posts(array('post_type'=> 'livros'));?>
	<?php 
		if ( have_posts() ) {
			while ( have_posts() )
			{
				the_post(); ?>
				<article>
			        <figure><img src="/img/foto.jpg"/></figure>
			        <h1><?php the_title(); ?></h2>
			    </article>
	<?php	} 
		}?>    
</section>

<?php get_sidebar('interna'); ?>
<?php get_footer();?>

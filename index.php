<?php get_header();?>    

<?php get_template_part('slider');?>

<section id="main-content">
	<?php query_posts(array('post_type'=> 'livros'));?>
	<?php 
		if ( have_posts() ) {
			while ( have_posts() )
			{
				the_post(); ?>
				<article>
			        <figure><img src="/img/foto.jpg"/></figure>
			        <h1><?php the_title(); ?></h1>
			    </article>
	<?php	} 
		}?>    


<?php get_sidebar('first'); ?>

</section>

<section id="second-content">
	<?php query_posts(array('post_type'=> 'livros'));?>
	<?php 
		if ( have_posts() ) {
			while ( have_posts() )
			{
				the_post(); ?>
				<article>
			        <figure><img src="/img/foto.jpg"/></figure>
			        <h1><?php the_title(); ?></h1>
			    </article>
	<?php	} 
		}?>    
<?php get_sidebar('second'); ?>
</section>

<?php get_footer();?>
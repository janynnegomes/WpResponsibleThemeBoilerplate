<?php get_header();?>    

<?php get_template_part('slider');?>

<section id="main-content">
	<section class="first-column column-background article-section">
		<?php query_posts(array('post_type'=> 'livros', 'showposts' => 3));?>
		<?php 
			if ( have_posts() ) {
				while ( have_posts() )
				{
					the_post(); ?>
					<article>
				        <?php if(has_post_thumbnail()){?>
				        <figure>
				        	<?php the_post_thumbnail('thumbnail'); ?>
				        </figure>
				        <?php } ?>
				        <h1><?php the_title(); ?></h1>
				        <p><?php echo get_the_excerpt();?></p>
				        <a class="read-more" href="<?php the_permalink();?>" >Ver mais</a>
				    </article>
		<?php	} 
			}?> 
	</section>   


	<section class="second-column column-background article-section">
		<?php query_posts(array('post_type'=> 'post', 'showposts' => 3));?>
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
	</section>

</section>
<?php get_sidebar('first'); ?>
<?php get_footer();?>
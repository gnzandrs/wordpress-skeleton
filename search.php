<?php get_header(); ?>

	<div class="container">

		<h2>Resultados de la búsqueda</h2>
		
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h3> 
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</h3>
				
				<small>Publicado el <?php the_time('j/m/Y') ?> por <?php the_author_posts_link() ?> <span> |  <?php the_tags('Etiquetas: ', ', ', ''); ?></span> </small>
				
				<?php
					if ( has_post_thumbnail() ) { 
								the_post_thumbnail();
					}
				?>
				
				<?php the_excerpt(); ?>

            <?php endwhile; ?>
            
            <?php  else: ?>
				<?php _e('Lo sentimos, no hay resultados con este término de búsqueda.'); ?>
            <?php endif; ?>

    </div> <!-- end band container -->
	
<?php get_footer(); ?>
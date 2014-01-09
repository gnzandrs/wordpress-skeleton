<?php get_header(); ?>

    <div class="container">
	
		<article>

				<?php if(have_posts()) : ?>
				
					<?php while(have_posts()) : the_post(); ?>
						<div class="post" id="post-<?php the_ID(); ?>">
						
							<h1><?php the_title(); ?></h1>
					 
							<div class="post-contenido">
								<p><?php the_content(); ?></p>
								
								<div class="post-metadata">
									<p >
										<?php _e('Archivado en:'); ?> <?php the_category(', ') ?> <?php _e('Escrito por:'); ?> <?php the_author_posts_link() ?> <br />
										<?php comments_popup_link('Sin Comentarios', '1 Comentario', '% Comentario'); ?> <?php edit_post_link('Editar', ' &#124; ', ''); ?>
									</p>
								</div>
								
							</div>
							<div class="post-comentarios">
								<?php comments_template(); ?>
							</div>
					 
						</div>
					<?php endwhile; ?>
				 
					<div class="paginador">
						<?php previous_post_link('< %link') ?> <?php next_post_link(' %link >') ?>
					</div>
			 
				<?php endif; ?>

		</article> <!-- end article -->
			
    </div> <!-- end container -->

<?php get_footer(); ?>
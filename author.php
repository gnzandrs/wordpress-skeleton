<?php get_header(); ?>

    <div class="container">
	
			<article>

				<h1 class="page-title author"><?php printf( __( 'Archivos del Autor: %s', 'twentyten' ), "<span class='vcard'><a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a></span>" ); ?></h1>

				<?php
				// If a user has filled out their description, show a bio on their entries.
				if ( get_the_author_meta( 'description' ) ) : ?>
					<div id="entry-author-info">
					
						<div id="author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
						</div><!-- #author-avatar -->
						<div id="author-description">
							<h2><?php printf( __( 'About %s', 'twentyten' ), get_the_author() ); ?></h2>
							<?php the_author_meta( 'description' ); ?>
						</div><!-- #author-description	-->
						
					</div><!-- #entry-author-info -->
				<?php endif; ?>

				<?php
					/* Since we called the_post() above, we need to
					 * rewind the loop back to the beginning that way
					 * we can run the loop properly, in full.
					 */
					rewind_posts();

					/* Run the loop for the author archive page to output the authors posts
					 * If you want to overload this in a child theme then include a file
					 * called loop-author.php and that will be used instead.
					 */
					 get_template_part( 'loop', 'author' );
				?>

			    <?php if(have_posts()) : ?>
				
					<?php while(have_posts()) : the_post(); ?>
						<div class="post pagina" id="post-<?php the_ID(); ?>">
							<br>
							<hr>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					 
							<div class="post-contenido">
								<?php
									if ( has_post_thumbnail() ) { 
												the_post_thumbnail();
									}
								?>
								
								<?php the_excerpt(); ?>
								<p class="post-metadata">
									<?php _e('Archivado en:'); ?> <?php the_category(', ') ?> <?php _e('Escrito por:'); ?> <?php  the_author(); ?><br />
									<?php comments_popup_link('Sin Comentarios', '1 Comentario', '% Comentario'); ?> <?php edit_post_link('Editar', ' &#124; ', ''); ?>
								</p>
							</div>
					 
						</div>
					<?php endwhile; ?>
				 
					<div class="paginador">
						<?php posts_nav_link(); ?>
					</div>
			 
			    <?php endif; ?>

			</article> <!-- end article -->

    </div> <!-- end container -->

<?php get_footer(); ?>
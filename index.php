<?php get_header(); ?>

    <div class="container">

        <article>

            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>

                    <div class="post" id="post-<?php the_ID(); ?>">

                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                        <div class="post-contenido">

                            <p><?php the_content(); ?></p>

                            <div class="post-metadata">
                                <p>
                                <?php _e('Archivado en:'); ?> <?php the_category(', ') ?> Escrito por: <?php the_author_posts_link() ?>
                                <br />
                                <?php comments_popup_link('Sin Comentarios', '1 Comentario', '% Comentario'); ?> <?php edit_post_link('Editar', ' &#124; ', ''); ?>
                                </p>
                            </div>

                        </div> <!-- end post contenido -->

                    </div>

                    <hr />  

                <?php endwhile; ?>                    

            <?php endif; ?>

        </article> <!-- end article -->

        <div class="paginador">
            <?php posts_nav_link(); ?>
        </div>

    </div> <!-- end container -->

<?php get_footer(); ?>
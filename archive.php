<div id="contenido">
    <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
 
    <?php $post = $posts[0]; ?>
      <?php /* Si es un archivo para categorías */ if (is_category()) { ?>
        <h2>Archivo para la categoría <?php single_cat_title(); ?>:</h2>
      <?php /* Si es un archivo para etiquetas */ } elseif( is_tag() ) { ?>
        <h2>Artículos etiquetados como: <?php single_tag_title(); ?></h2>
      <?php /* Si es un archivo diario */ } elseif (is_day()) { ?>
        <h2>Archivo para <?php the_time('F jS, Y'); ?>:</h2>
      <?php /* Si es un archivo mensual */ } elseif (is_month()) { ?>
        <h2>Archivo para <?php the_time('F, Y'); ?>:</h2>
      <?php /* Si es un archivo anual */ } elseif (is_year()) { ?>
        <h2>Archivo para <?php the_time('Y'); ?>:</h2>
      <?php /* Si es el archivo de autor */ } elseif (is_author()) { ?>
        <h2>Archivo del autor</h2>
      <?php /* Si el archivo ha sido paginado */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        <h2>Archivo del blog</h2>
    <?php } ?>
 
    <div class="post pagina" id="post-<?php the_ID(); ?>">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
 
        <div class="post-contenido">
            <?php the_content(); ?>
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
</div>
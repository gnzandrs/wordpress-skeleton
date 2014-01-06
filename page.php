<?php get_header(); ?>

	<div class="container">

		<article>

			<?php if(have_posts()) : ?>

				<?php while(have_posts()) : the_post(); ?>

					<div class="post" id="post-<?php the_ID(); ?>">

						<h1><?php the_title(); ?></h1>

						<div class="post-contenido">
							<p><?php the_content(); ?></p>
						</div>

					</div>

				<?php endwhile; ?>

			<?php endif; ?>

		</article> <!-- article end -->

	</div> <!-- container end -->

<?php get_footer(); ?>
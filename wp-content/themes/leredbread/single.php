<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

	<div class="blog-content-wrapper">
	<div class="blog-content">


			<?php get_template_part( 'template-parts/content', 'single' ); ?>


			<hr class="decorative">

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					// comments_template();

				endif;
			?>

		<?php endwhile; // End of the loop. ?>


		</div><!-- .blog-content-->
	<?php get_sidebar(); ?>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

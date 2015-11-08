<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="content-for-contact-page">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="content-wrapper">

				<?php while ( have_posts() ) : the_post(); ?>
					<div class="contact-content">
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
					</div>
				<?php endwhile; // End of the loop. ?>
				<?php get_sidebar(); ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

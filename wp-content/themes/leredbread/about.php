<?php
/**
 * Template Name: About Page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="entry-header">

				<h1 class="entry-title">Learn About Our Team and Culture</h1>

				<p class= "tagline"><?php echo esc_html( CFS()->get('tagline')); ?></p>
			</section>

			<hr class="decorative">

			<div class="entry-content">

				<div class="about-blocks">

					<section class= "about-block-item"><?php echo ( CFS()->get('team')); ?></section>

					<section class= "about-block-item"><?php echo ( CFS()->get('bakery')); ?></section>

				</div>

				<section class= "story"><?php echo ( CFS()->get('story')); ?></section>
			</div>

			<section class="call-to-action clearfix">
	            <span class="cta-container">
	            	<p class= "cta-description"><?php echo esc_html( CFS()->get('description')); ?></p>
					<p class= "cta-btn"><?php echo CFS()->get('btn'); ?></p>
	            </span>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>

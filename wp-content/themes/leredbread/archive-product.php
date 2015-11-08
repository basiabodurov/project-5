<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

			<header class="archive-page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
				<p>We are a team of creative and talented individuals who love making delicious treats.</p>
				<hr class="decorative">
			</header><!-- .page-header -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="archive-container">

				<section class="product-info-archive">
						        <?php
			        $terms = get_terms("product-type");
			        if ($terms) {?>
			        	<ul class="product-type">
				        	<div class="product-type-block-wrapper">
				        		<div class="product-blocks">
				        		<?php foreach($terms as $term) { ?>
					        		<li class="product">
					        		<img src="<?php echo
				                    get_template_directory_uri() ?>/images/<?php echo $term->slug ?>.png"
				                    alt="<?php echo $term->slug ?>" >
				                    <a href="<?php echo get_term_link($term); ?>"><h3><?php echo $term->name; ?><h3>
				                    </a>
				                    </li><?php
				                    }
				                } ?>
				                </div>
				            </div>
			            </ul>
		        </section>

		        <div class="product-grid">


					<?php if ( have_posts() ) : ?>


						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

						<div class="product-grid-item">

							<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large' ); ?>
							<?php endif; ?>

							<div class="grid-product-info">
							<?php the_title( '<span class="entry-title">', '</span ::before>' ); ?>

							<span class= "price"><?php echo esc_html( CFS()->get('price')); ?></span>
							</div>

						</div>

						<?php endwhile; ?>

						<?php the_posts_navigation(); ?>

					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>

					

				</div>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>

<?php
/**
 * Template Name: Home Page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="hero">
				<span class="hero-text">Baked to Perfection.</span>
			</section>
			<section class="product-info">
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
                    alt="<?php echo $term->slug ?>">
                    <h3><?php echo $term->name; ?></h3>
                    <p><?php echo $term->description; ?>
                    	<a href="<?php echo get_term_link($term); ?>">See More...</a>
                    	</p>
                    	</li><?php
                    }
                } ?>
                </div>
                </div>
            </ul>
            </section>
			<section class="call-to-action clearfix">
	            <span class="cta-container">
	            	<p class= "cta-description"><?php echo esc_html( CFS()->get('description')); ?></p>
					<p class= "cta-btn"><?php echo CFS()->get('btn'); ?></p>
	            </span>
            </section>
			<section class="news-section">
				<div class="news-container">
					<h2>Our Latest News</h2>
					<hr class="decorative"::after></hr>
				<ul class="news-block">
						<?php
						$args = array( 'posts_per_page' => 4,
									   'post_type' => 'post', );

						$myposts = get_posts( $args );
						foreach ( $myposts as $post ) : setup_postdata( $post );
						?>
						<li>
							<div class="thumbnail-wrapper">
							<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large' ); ?>
							<?php endif; ?>
							</div>
							<div class="post-info-wrapper">
							<h3>
							<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?></a>
							</h3>
							<br>
							<?php red_starter_posted_on(); ?> /
							<?php comments_number('No Comment' , '1 Comment' , '% Comments'); ?>
							</div>
						</li>

					<?php endforeach; 
					wp_reset_postdata();?>

				</ul>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
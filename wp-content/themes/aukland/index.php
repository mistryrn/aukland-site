<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Aukland
 */

get_header(); ?>

	<div class="main-hero">
		<div class="overlay">
			<div class="row">
				<div class="contain-to-grid">
					<h1 id="main">Aukland</h1>
				</div>
			</div>
		</div>
	</div>

	<div id="main-content" class="row" data-equalizer><!-- Foundation .row start -->

		<div class="small-12 medium-8 columns" data-equalizer-watch><!-- Foundation .columns start -->

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<?php if ( have_posts() ) : ?>

						<h3>LATEST NEWS</h3>

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

								<div>
									<?php
										/* Include the Post-Format-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
										 */
										get_template_part( 'content', get_post_format() );
									?>
								</div>

						<?php endwhile; ?>
					<?php else : ?>

						<?php get_template_part( 'content', 'none' ); ?>

					<?php endif; ?>

				</main><!-- #main -->
			</div><!-- #primary -->

		</div><!-- Foundation .columns end -->

		<div class="small-12 medium-4 columns sidebar" data-equalizer-watch><!-- Foundation .columns start -->
			
			<?php get_sidebar(); ?>

		</div><!-- Foundation .columns end -->

	</div><!-- Foundation .row end -->

<?php get_footer(); ?>

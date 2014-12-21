<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Aukland
 */

get_header(); ?>

	<div class="row" id="main-content" data-equalizer><!-- Foundation .row start -->

		<div class="small-12 medium-8 columns" data-equalizer-watch><!-- Foundation .columns start -->

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'page' ); ?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->
			</div><!-- #primary -->

		</div><!-- Foundation .columns end -->

		<div class="small-12 medium-4 columns sidebar" data-equalizer-watch><!-- Foundation .columns start -->
			
			<?php get_sidebar(); ?>

		</div><!-- Foundation .columns end -->

	</div><!-- Foundation .row end -->

<?php get_footer(); ?>

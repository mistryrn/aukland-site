<?php
/**
 * The template for displaying all single posts.
 *
 * @package Aukland
 */

get_header(); ?>

	<div class="row" id="main-content" data-equalizer><!-- Foundation .row start -->

		<div class="small-12 medium-8 columns sidebar" data-equalizer-watch><!-- Foundation .columns start -->

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'single' ); ?>

					<?php aukland_post_nav(); ?>

				<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->
			</div><!-- #primary -->

			</div><!-- Foundation .columns end -->

		<div class="small-12 medium-4 columns sidebar" data-equalizer-watch><!-- Foundation .columns start -->
			
			<?php get_sidebar(); ?>

		</div><!-- Foundation .columns end -->

	</div><!-- Foundation .row end -->
	
<?php get_footer(); ?>
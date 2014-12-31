<?php
/**
 * The template for displaying all single posts.
 *
 * @package Aukland
 */

get_header(); ?>

	<div class="row" id="main-content"><!-- Foundation .row start -->

		<div class="small-12 medium-10 medium-centered large-8 large-centered columns"><!-- Foundation .columns start -->

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'single' ); ?>

					<?php aukland_post_nav(); ?>

				<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->
			</div><!-- #primary -->

		</div><!-- Foundation .columns end -->
		<div class="small-12 medium-10 medium-centered large-8 large-centered columns no-pad" data-equalizer>
			<?php dynamic_sidebar('single-sidebar'); ?>
		</div>

	</div><!-- Foundation .row end -->
	
<?php get_footer(); ?>
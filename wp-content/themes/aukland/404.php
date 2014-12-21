<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Aukland
 */

get_header(); ?>

	<div class="row" id="main-content" data-equalizer><!-- Foundation .row start -->

		<div class="small-12 medium-8 columns" data-equalizer-watch><!-- Foundation .columns start -->

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<section class="error-404 not-found">
						<header class="page-header">
							<h3 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'aukland' ); ?></h3>
						</header><!-- .page-header -->

						<div class="page-content">
							<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'aukland' ); ?></p>

							<?php get_search_form(); ?>

							<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

						</div><!-- .page-content -->
					</section><!-- .error-404 -->

				</main><!-- #main -->
			</div><!-- #primary -->

		</div><!-- Foundation .columns end -->

		<div class="small-12 medium-4 columns sidebar" data-equalizer-watch><!-- Foundation .columns start -->
			
			<?php get_sidebar(); ?>

		</div><!-- Foundation .columns end -->

	</div><!-- Foundation .row end -->

<?php get_footer(); ?>

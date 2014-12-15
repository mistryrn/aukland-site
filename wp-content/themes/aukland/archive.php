<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Aukland
 */

get_header(); ?>
	
	<div class="row" data-equalizer><!-- Foundation .row start -->

		<div class="large-9 medium-8 columns" data-equalizer-watch><!-- Foundation .columns start -->

			<section id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title">
							<?php
								if ( is_category() ) :
									single_cat_title();

								elseif ( is_tag() ) :
									single_tag_title();

								elseif ( is_author() ) :
									printf( __( 'Author: %s', 'aukland' ), '<span class="vcard">' . get_the_author() . '</span>' );

								elseif ( is_day() ) :
									printf( __( 'Day: %s', 'aukland' ), '<span>' . get_the_date() . '</span>' );

								elseif ( is_month() ) :
									printf( __( 'Month: %s', 'aukland' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'aukland' ) ) . '</span>' );

								elseif ( is_year() ) :
									printf( __( 'Year: %s', 'aukland' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'aukland' ) ) . '</span>' );

								elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
									_e( 'Asides', 'aukland' );

								elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
									_e( 'Galleries', 'aukland');

								elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
									_e( 'Images', 'aukland');

								elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
									_e( 'Videos', 'aukland' );

								elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
									_e( 'Quotes', 'aukland' );

								elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
									_e( 'Links', 'aukland' );

								elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
									_e( 'Statuses', 'aukland' );

								elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
									_e( 'Audios', 'aukland' );

								elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
									_e( 'Chats', 'aukland' );

								else :
									_e( 'Archives', 'aukland' );

								endif;
							?>
						</h1>
						<?php
							// Show an optional term description.
							$term_description = term_description();
							if ( ! empty( $term_description ) ) :
								printf( '<div class="taxonomy-description">%s</div>', $term_description );
							endif;
						?>
					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>

					<ul class="large-block-grid-2"><!-- Foundation block grid start -->
					<?php while ( have_posts() ) : the_post(); ?>

						<li><!-- Foundation block grid item start -->
						<?php
							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );
						?>
						</li><!-- Foundation block grid item end -->

					<?php endwhile; ?>
					</ul><!-- Foundation block grid end -->

					<?php aukland_paging_nav(); ?>

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>

				</main><!-- #main -->
			</section><!-- #primary -->

		</div><!-- Foundation .columns end -->

		<div class="large-3 medium-4 columns sidebar" data-equalizer-watch><!-- Foundation .columns start -->
			
			<?php get_sidebar(); ?>

		</div><!-- Foundation .columns end -->

	</div><!-- Foundation .row end -->
	
<?php get_footer(); ?>
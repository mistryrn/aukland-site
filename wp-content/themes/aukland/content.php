<?php
/**
 * @package Aukland
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php aukland_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			// the_content( sprintf(
			// 	__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'aukland' ),
			// 	the_title( '<span class="screen-reader-text">"', '"</span>', false )
			// ) );
			echo content(55);
		?>

		<?php
			// wp_link_pages( array(
			// 	'before' => '<div class="page-links">' . __( 'Pages:', 'aukland' ),
			// 	'after'  => '</div>',
			// ) );
			echo '<div><a href="'.get_the_permalink().'">Continue reading <span class="meta-nav">&rarr;</span></a></div>'
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
<?php
/**
 * @package Aukland
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php aukland_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			echo content(55);
		?>

		<?php
			echo '<p class="continue"><a href="'.get_the_permalink().'">Continue reading <span class="meta-nav">&rarr;</span></a></p>'
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
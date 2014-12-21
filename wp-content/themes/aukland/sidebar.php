<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Aukland
 */
?>

<div id="secondary" class="widget-area" role="complementary">
    <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
    <?php
    if (is_page('Contact')) {
      $no_sidebar = !dynamic_sidebar('contact-sidebar'); // Attempt showing page sidebar
    } else {
      $no_sidebar = !dynamic_sidebar('sidebar-1'); // Fall back to showing generic sidebar
    }
    ?>
    <?php endif; // end sidebar widget area ?>
</div><!-- #secondary -->
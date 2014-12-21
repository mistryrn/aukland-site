<?php

/**
* Template Name: Videos Page
*/

get_header(); ?>

<div id="main-content" class="row" data-equalizer><!-- Foundation .row start -->

    <div class="small-12 columns" data-equalizer-watch><!-- Foundation .columns start -->

      <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <h3>VIDEOS</h3>

            <ul class="medium-block-grid-2">

            <?php
            $type = 'video';
            $args=array(
              'post_type' => $type,
              'post_status' => 'private',
              'posts_per_page' => -1,
              'caller_get_posts'=> 1,
              'orderby'=>'meta_value',
              'meta_key' => 'release_date',
              'order'=>'DESC');

            $my_query = null;
            $my_query = new WP_Query($args);
            if( $my_query->have_posts() ) {
              while ($my_query->have_posts()) : $my_query->the_post(); ?>

              <li>
                <h4><?php echo get_field('title'); echo " "; $time=strtotime(get_field('release_date')); $year = date("Y",$time); echo "($year)"; ?></h4>
                <?php the_field('video_embed_code'); ?>
              </li>

              <?php endwhile;
            }
            wp_reset_query();  // Restore global post data stomped by the_post().
            ?>

            </ul>
            
        </main><!-- #main -->
      </div><!-- #primary -->

    </div><!-- Foundation .columns end -->

  </div><!-- Foundation .row end -->

<?php get_footer(); ?>


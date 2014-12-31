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

            <?php
            $vidCount = 0;
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
              <?php $vidCount++; if ($vidCount == sizeof($my_query->posts) && sizeof($my_query->posts) % 2 != 0) { echo "<div class='small-12 medium-6 columns no-pad end'>"; } else { echo "<div class='small-12 medium-6 columns no-pad'>"; }  ?>
                <h4><?php echo get_field('title'); echo " "; $time=strtotime(get_field('release_date')); $year = date("Y",$time); echo "($year)"; ?></h4>
                <div class="flex-video widescreen small-12 medium-11">
                  <?php the_field('video_embed_code'); ?>
                </div>
              </div>

              <?php endwhile;
            }
            wp_reset_query();  // Restore global post data stomped by the_post().
            ?>
            
        </main><!-- #main -->
      </div><!-- #primary -->

    </div><!-- Foundation .columns end -->

  </div><!-- Foundation .row end -->

<?php get_footer(); ?>


<?php

/**
* Template Name: Music Page
*/

get_header(); ?>

<div id="main-content" class="row" data-equalizer><!-- Foundation .row start -->

    <div class="small-12 columns" data-equalizer-watch><!-- Foundation .columns start -->

      <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <h3>MUSIC</h3>

            <?php
            $type = 'album';
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

              <div class="row release">
                <div class="small-12 medium-7 medium-push-5 columns">
                  <h4><?php echo get_field('title'); ?></h4>
                  <div class="show-for-medium-up" id="music-links">
                    <p><?php $time=strtotime(get_field('release_date')); $release_date = date("F jS, Y",$time); echo "Released $release_date"; ?></p>
                    <p><?php the_field('release_notes'); ?></p>
                    <?php
                    if(get_field('itunes_link')) {
                      echo "<p><a href='"; echo (get_field('itunes_link')); echo "'>Buy <span class='icon-shopping-cart'></span></a></p>";
                    }
                    if(get_field('download_link')) {
                      echo "<p><a href='"; echo (get_field('download_link')); echo "'>Download <span class='icon-cloud-download'></span></a></p>";
                    }
                    ?>
                </div>
                </div>
                <div id="artwork" class="small-12 medium-5 medium-pull-7 columns">
                  <img src="<?php the_field('album_art'); ?>">
                  <?php the_field('bandcamp_embed_code'); ?>
                </div>
                <div class="small-12 columns hide-for-medium-up" id="music-links">
                    <p><?php $time=strtotime(get_field('release_date')); $release_date = date("F jS, Y",$time); echo "Released $release_date"; ?></p>
                    <p><?php the_field('release_notes'); ?></p>
                    <?php
                    if(get_field('itunes_link')) {
                      echo "<p><a href='"; echo (get_field('itunes_link')); echo "'>Buy <span class='icon-shopping-cart'></span></a></p>";
                    }
                    if(get_field('download_link')) {
                      echo "<p><a href='"; echo (get_field('download_link')); echo "'>Download <span class='icon-cloud-download'></span></a></p>";
                    }
                    ?>
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


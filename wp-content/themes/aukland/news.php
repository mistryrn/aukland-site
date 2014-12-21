<?php

/**
* Template Name: News Page
*/

get_header(); ?>

<div id="main-content" class="row" data-equalizer><!-- Foundation .row start -->

    <div class="small-12 medium-8 columns" data-equalizer-watch><!-- Foundation .columns start -->

      <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <h3>NEWS</h3>

            <?php
            $type = 'post';
            $args=array(
              'post_type' => $type,
              'post_status' => 'publish',
              'posts_per_page' => 5,
              'orderby'=>'date',
              'order'=>'DESC');

            $my_query = null;
            $my_query = new WP_Query($args);
            if( $my_query->have_posts() ) {
              while ($my_query->have_posts()) : $my_query->the_post(); ?>
                
                <div>
                  <?php
                    /* Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'content', get_post_format() );
                  ?>
                
                </div>
                <?php aukland_paging_nav(); ?>
              <?php endwhile;
            }
            wp_reset_query();  // Restore global post data stomped by the_post().
            ?>            
            

        </main><!-- #main -->
      </div><!-- #primary -->

    </div><!-- Foundation .columns end -->

    <div class="small-12 medium-4 columns sidebar" data-equalizer-watch><!-- Foundation .columns start -->
      
      <?php get_sidebar(); ?>

    </div><!-- Foundation .columns end -->

  </div><!-- Foundation .row end -->

<?php get_footer(); ?>


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
            $num_posts = wp_count_posts('show')->publish;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $type = 'post';
            $args=array(
              'post_type' => $type,
              'post_status' => 'publish',
              'posts_per_page' => 5,
              'caller_get_posts'=> 1,
              'orderby'=>'date',
              'paged' => $paged,
              'order'=>'DESC');
            $temp = $wp_query;
            $wp_query = null;
            $wp_query = new WP_Query($args);
            if( $wp_query->have_posts() ) {
              while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                
                <div>
                  <?php
                    /* Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'content', get_post_format() );
                  ?>
                
                </div>
              <?php endwhile;
              aukland_paging_nav();
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

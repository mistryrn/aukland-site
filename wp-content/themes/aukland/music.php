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

            <ul class="medium-block-grid-2">
              <li>
                <div class="small-10 columns no-pad">
                  <h4>The Orange Above EP (2014)</h4>
                </div>
                <div class="small-2 columns no-pad" id="music-links">
                  <h4><a href=""><i class="fi-download"></i></a> <a href=""><i class="fi-shopping-cart"></i></a></h4>
                </div>
                <img src="<?php bloginfo('template_directory'); ?>/images/doing.jpg">
                <iframe style="border: 0; width: 100%; height: 42px;" src="http://bandcamp.com/EmbeddedPlayer/track=2163984786/size=small/bgcol=ffffff/linkcol=0687f5/artwork=none/transparent=true/" seamless><a href="http://aukland.bandcamp.com/track/doing-it-right">Doing It Right by Aukland</a></iframe>
              </li>
            </ul>
            
        </main><!-- #main -->
      </div><!-- #primary -->

    </div><!-- Foundation .columns end -->

  </div><!-- Foundation .row end -->

<?php get_footer(); ?>


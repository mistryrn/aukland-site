<?php

/**
* Template Name: Tour Page
*/

get_header(); ?>

<div id="main-content" class="row" data-equalizer><!-- Foundation .row start -->

    <div class="small-12 columns" data-equalizer-watch><!-- Foundation .columns start -->

      <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <h3>TOUR</h3>

            <?php
            $response = file_get_contents("http://api.bandsintown.com/artists/Aukland/events.json?api_version=2.0&app_id=AUKLANDSITE");
            $response = json_decode($response);
            if ($response != null) {
                $i = 0;
                foreach ($response as $event) {
                  echo "<div class='tour-date small-12 columns' id='date-$i'>";
                  $datetime=$event->datetime;
                  $time=strtotime($datetime);
                  $showdate = date("M jS",$time);
                  $showday = date("D",$time);
                  $venue = $event->venue->name;
                  $city = $event->venue->city;
                  if ($event->venue->region == '08') {
                      $region = "ON";
                  } else {            
                      $region = $event->venue->region;
                  }
                  // Date-Time Info
                    echo "<div class='small-3 medium-2 large-1 columns no-pad'>";
                      echo "<div class='small-12 columns no-pad' id='date'>";
                        echo "<p>$showdate</p> "; // rsvp
                      echo "</div>";
                      echo "<div class='small-12 columns no-pad' id='day'>";
                        echo "<p>$showday</p> "; // rsvp
                      echo "</div>";
                    echo "</div>";
                  // Location Info
                    echo "<div class='small-7 medium-8 large-9 columns no-pad' id='location'>";
                      echo "<div class='small-12 medium-7 large-8 columns no-pad'>";
                        echo "<h4>$venue</h4>";
                      echo "</div>";
                      echo "<div class='small-12 medium-5 large-4 columns no-pad'>";
                        echo "<h4>$city, $region</h4>";
                      echo "</div>";
                    echo "</div>";
                  // Actions
                    echo "<div class='small-2 medium-2 large-2 columns no-pad' id='actions'>";
                      echo "<div class='small-12 large-6 columns no-pad' id='rsvp'>";
                        echo "<a href='$event->facebook_rsvp_url'>RSVP</a> "; // rsvp
                      echo "</div>";
                      echo "<div class='small-12 large-6 columns no-pad' id='tickets'>";
                        if ($event->ticket_url) {
                            echo "<a href='$event->ticket_url'>Tickets</a>"; // tickets
                        } else {
                            echo "<a href='' class='inactive'>Tickets</a>"; // tickets (none)
                        }
                      echo "</div>";
                    echo "</div>";
                  echo "</div>";
                  $i++;
                }
            } else {
                echo "<div class='tour-date small-12 columns'>";
                  echo "<h4>Sorry, there are no upcoming shows at this time. Please check back soon!</h4>";
                  echo "<p>Sign up below and get notified whenever Aukland comes to town:</p>";
                  echo "<a href='http://www.bandsintown.com/Aukland/start_tracking?came_from=AUKLANDSITE' class='button'>Notify Me</a>";
                echo "</div>";
            }
            ?>            
            
        </main><!-- #main -->
      </div><!-- #primary -->

    </div><!-- Foundation .columns end -->

  </div><!-- Foundation .row end -->

<?php get_footer(); ?>


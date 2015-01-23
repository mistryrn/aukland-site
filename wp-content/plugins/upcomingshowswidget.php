<?php
/*
Plugin Name: Upcoming Shows Widget
Plugin URI: http://rakeshmistry.ca/
Description: Pulls the 5 closest upcoming shows for an artist via BandsInTown.
Author: Rakesh Mistry
Version: 1
Author URI: http://rakeshmistry.ca/
*/


class UpcomingShowsWidget extends WP_Widget
{
    function UpcomingShowsWidget()
    {
        $widget_ops = array('classname' => 'UpcomingShowsWidget', 'description' => 'Pulls a specified number of upcoming shows for an artist via BandsInTown.' );
        $this->WP_Widget('UpcomingShowsWidget', 'Upcoming Shows Widget', $widget_ops);
    }

    function form($instance)
    {
        $instance = wp_parse_args( (array) $instance, array( 'title' => '', 'display' => '' ) );
        $title = $instance['title'];
        $display = $instance['display'];
?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>">Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('display'); ?>">Max. Shows Displayed: <input class="widefat" id="<?php echo $this->get_field_id('display'); ?>" name="<?php echo $this->get_field_name('display'); ?>" type="text" value="<?php echo attribute_escape($display); ?>" /></label></p>
<?php
    }

    function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        $instance['display'] = $new_instance['display'];
        return $instance;
    }

    function widget($args, $instance)
    {
        extract($args, EXTR_SKIP);
     
        echo $before_widget;
        $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);
        $display = $instance['display'];
     
        if (!empty($title))
          echo $before_title . $title . $after_title;;
 
        // WIDGET CODE GOES HERE
        $response = @file_get_contents("http://api.bandsintown.com/artists/Aukland/events.json?api_version=2.0&app_id=AUKLANDSITE");
        if ($response === FALSE) {
            $response = null;
        } else {
            $response = json_decode($response);
        }
        $i = 0;
        echo "<ul>";
        if ($response != null) {
            foreach ($response as $event) {
                if ($i == $display) break;
                echo "<li>";
                $datetime=$event->datetime;
                $time=strtotime($datetime);
                $line1 = date("M. jS",$time);
                $line1 = $line1." at ";
                $line1 = $line1.$event->venue->name;
                echo "<h5><a href='$event->facebook_rsvp_url'>$line1</a></h5>";
                $line2 = $event->venue->city;
                $line2 = $line2.", ";
                if ($event->venue->region == '08') {
                    $line2 = $line2."ON";
                } else {            
                    $line2 = $line2.$event->venue->region;
                }
                echo "<p>$line2";
                echo "<span class='tour-links'>";
                echo "<a href='$event->facebook_rsvp_url' class='btn'>RSVP</a> "; // rsvp
                if ($event->ticket_url) {
                    echo "<a href='$event->ticket_url' class='btn'>Tickets</a>"; // tickets
                } else {
                    echo "<a href='' class='btn inactive'>Tickets</a>"; // tickets (none)
                }
                echo "</span></p>";
                echo "</li>";
                $i++;
            }
        } else {
            echo "<li>";
              echo "<h4>No Upcoming Shows</h4>";
              echo "<p>Sign up below and get notified whenever Aukland comes to town:</p>";
              echo "<a href='http://www.bandsintown.com/Aukland/start_tracking?came_from=AUKLANDSITE' class='btn'>Notify Me</a>";
            echo "</li>";
        }
        echo "</ul>";
        
        echo $after_widget;
    }
}
add_action( 'widgets_init', create_function('', 'return register_widget("UpcomingShowsWidget");') );?>
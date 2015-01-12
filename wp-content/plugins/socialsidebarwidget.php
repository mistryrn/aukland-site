<?php
/*
Plugin Name: Social Sidebar Widget
Plugin URI: http://rakeshmistry.ca/
Description: A simple sidebar widget for Facebook, Twitter, Instagram, and YouTube links.
Author: Rakesh Mistry
Version: 1
Author URI: http://rakeshmistry.ca/
*/


class SocialSidebarWidget extends WP_Widget
{
    function SocialSidebarWidget()
    {
        $widget_ops = array('classname' => 'SocialSidebarWidget', 'description' => 'A simple sidebar widget for Facebook, Twitter, Instagram, and YouTube links.' );
        $this->WP_Widget('SocialSidebarWidget', 'Social Sidebar Widget', $widget_ops);
    }

    function form($instance)
    {
        $instance = wp_parse_args( (array) $instance, array( 'title' => '', 'facebook' => '', 'twitter' => '', 'instagram' => '', 'youtube' => '' ) );
        $title = $instance['title'];
        $facebook = $instance['facebook'];
        $twitter = $instance['twitter'];
        $instagram = $instance['instagram'];
        $youtube = $instance['youtube'];
?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>">Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('facebook'); ?>">Facebook ID: <input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo attribute_escape($facebook); ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('twitter'); ?>">Twitter Handle: <input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo attribute_escape($twitter); ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('instagram'); ?>">Instagram Username: <input class="widefat" id="<?php echo $this->get_field_id('instagram'); ?>" name="<?php echo $this->get_field_name('instagram'); ?>" type="text" value="<?php echo attribute_escape($instagram); ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('youtube'); ?>">YouTube Channel: <input class="widefat" id="<?php echo $this->get_field_id('youtube'); ?>" name="<?php echo $this->get_field_name('youtube'); ?>" type="text" value="<?php echo attribute_escape($youtube); ?>" /></label></p>
<?php
    }

    function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        $instance['facebook'] = $new_instance['facebook'];
        $instance['twitter'] = $new_instance['twitter'];
        $instance['instagram'] = $new_instance['instagram'];
        $instance['youtube'] = $new_instance['youtube'];
        return $instance;
    }

    function widget($args, $instance)
    {
        extract($args, EXTR_SKIP);
     
        echo $before_widget;
        $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);
        $facebook = $instance['facebook'];
        $twitter = $instance['twitter'];
        $instagram = $instance['instagram'];
        $youtube = $instance['youtube'];

     
        if (!empty($title))
          echo $before_title . $title . $after_title;;
 
        // WIDGET CODE GOES HERE
        echo "<ul>";
        if ($instance['facebook'] != null)
                echo "<li><h5><a class='icon-btn' href='https://www.facebook.com/$facebook' title='Like us on Facebook'><i class='fi-social-facebook'></i> Facebook /$facebook</a></h5></li>";
        if ($instance['twitter'] != null)
                echo "<li><h5><a class='icon-btn' href='https://www.twitter.com/$twitter' title='Follow us on Twitter'><i class='fi-social-twitter'></i> Twitter @$twitter</a></h5></li>";
        if ($instance['instagram'] != null)
                echo "<li><h5><a class='icon-btn' href='http://www.instagram.com/$instagram' title='Follow us on Instagram'><i class='fi-social-instagram'></i> Instagram @$instagram</a></h5></li>";
        if ($instance['youtube'] != null)
                echo "<li><h5><a class='icon-btn' href='https://www.youtube.com/user/$youtube' title='Subscribe to our YouTube'><i class='fi-social-youtube'></i> YouTube /$youtube</a></h5></li>";
        echo "</ul>";
        
        echo $after_widget;
    }
}
add_action( 'widgets_init', create_function('', 'return register_widget("SocialSidebarWidget");') );?>
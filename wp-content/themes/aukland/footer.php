<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Aukland
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="row"><!-- Foundation .row start -->
            <div class="small-12 columns"><!-- Foundation .columns start -->
        		<div class="site-info">
                    <p>&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?> - Designed by <a href="http://www.rakeshmistry.ca/">Rakesh Mistry</a></p>
        		</div><!-- .site-info -->
            </div><!-- Foundation .columns end -->
        </div><!-- Foundation .row end -->
	</footer><!-- #colophon -->
    <div class="bottom-fixed">
        <div class="row">
            <div class="small-12 medium-11 medium-centered columns">
                <iframe id="sc" width="100%" height="96" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/182425791%3Fsecret_token%3Ds-7b6UI&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false&amp;show_artwork=false"></iframe>
            </div>
        </div>
    </div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

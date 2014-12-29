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
</div><!-- #page -->

<?php wp_footer(); ?>
<script>window.viewportUnitsBuggyfill.init();</script>
</body>
</html>

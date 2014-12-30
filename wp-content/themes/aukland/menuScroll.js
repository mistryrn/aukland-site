jQuery(window).load(function() {
    // Only perform menuScroll calculations on home page
    if(! jQuery('.nav').hasClass('regular') ) {
        // Get position of top of #aukland element, set as 'maintop'
        var maintop = jQuery('#aukland').offset().top - 21;
        console.log('used ' + maintop);

        jQuery(window).on('scroll gesturechange touchmove', function() {
            stop = Math.round(jQuery(window).scrollTop());
            if (stop > maintop) {
                jQuery('.nav').addClass('past-aukland');
                jQuery('.menu-logo').show();
                jQuery('#mobile-nav').show();
            } else {
                jQuery('.nav').removeClass('past-aukland');
                jQuery('.menu-logo').hide();
                jQuery('#mobile-nav').hide();
            }
        });

        var delta;
        // Update 'maintop' on window resize or orientation change
        function updateVars() {
            maintop = jQuery('#aukland').offset().top - 21;
            console.log('detected! should be ' + maintop);
        }
        // Detect window resize or orientation change
        jQuery(window).on('resize orientationchange', function() {
            // Using timeouts to only fire updateVars when the page is ready
            clearTimeout(delta);
            delta = setTimeout(function(){
                updateVars();
            }, 300);
        });

    } else {
        jQuery('.nav').addClass('past-aukland');
        jQuery('.menu-logo').show();
        jQuery('#mobile-nav').show();    
    }
});

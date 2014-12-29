if(! jQuery('.nav').hasClass('regular') ) {
// get the value of the bottom of the #aukland element by adding the offset of that element plus its height, set it as a variable
var maintop = jQuery('#aukland').offset().top - 18;

// on scroll
jQuery(window).on('scroll gesturechange touchmove', function() {

    // round here to reduce some workload
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
} else {
    jQuery('.nav').addClass('past-aukland');
    jQuery('.menu-logo').show();
    jQuery('#mobile-nav').show();    
}

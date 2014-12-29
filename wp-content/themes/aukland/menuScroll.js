if(! jQuery('.nav').hasClass('regular') ) {
// get the value of the bottom of the #main element by adding the offset of that element plus its height, set it as a variable
var maintop = jQuery('#main').offset().top - 18;
// jQuery('#mobile-nav').addClass('override');
// jQuery('.override').hide();
// on scroll
jQuery(window).on('scroll gesturechange touchmove', function() {

    // round here to reduce some workload
    stop = Math.round(jQuery(window).scrollTop());
    if (stop > maintop) {
        jQuery('.nav').addClass('past-main');
        jQuery('.menu-logo').show();
        jQuery('#mobile-nav').show();
    } else {
        jQuery('.nav').removeClass('past-main');
        jQuery('.menu-logo').hide();
        jQuery('#mobile-nav').hide();
    }
});
} else {
    jQuery('.nav').addClass('past-main');
    jQuery('.menu-logo').show();
    jQuery('#mobile-nav').show();    
}

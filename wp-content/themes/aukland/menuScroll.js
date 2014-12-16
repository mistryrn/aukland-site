// get the value of the bottom of the #main element by adding the offset of that element plus its height, set it as a variable
var maintop = jQuery('#main').offset().top - 15;
var mainbottom = jQuery('#main').offset().top + Math.floor(jQuery('#main').height()/2.0);

// on scroll
jQuery(window).on('scroll', function() {

    // round here to reduce some workload
    stop = Math.round(jQuery(window).scrollTop());
    if (stop > maintop) {
        jQuery('.nav').addClass('past-main');
    } else {
        jQuery('.nav').removeClass('past-main');
    }
    if (stop > mainbottom) {
        jQuery('.menu-logo').removeClass('invisible');
    } else {
        jQuery('.menu-logo').addClass('invisible');
    }
});
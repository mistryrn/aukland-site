jQuery(document).ready(function() {
 
    jQuery('#menu-toggle').click(function (e) {
      e.stopPropagation();
      e.preventDefault();
      jQuery('#menu').toggleClass('open');
      jQuery('.nav').toggleClass('open');
    });

    jQuery(document).click(function (e) {
        jQuery('#menu').removeClass('open');
        jQuery('.nav').removeClass('open');
    });

});
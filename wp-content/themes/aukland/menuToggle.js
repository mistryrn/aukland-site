jQuery(document).ready(function() {
    jQuery('#menu-toggle').click(function (e) {
      jQuery('#menu').toggleClass('open');
      e.preventDefault();
    }); 
});
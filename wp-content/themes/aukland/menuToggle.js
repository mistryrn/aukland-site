jQuery(document).ready(function() {
    var wasForced = false;
    jQuery('#menu-toggle').click(function (e) {
      e.stopPropagation();
      e.preventDefault();
      jQuery('#menu').toggleClass('open');
      jQuery('.nav').toggleClass('open');
    });
});
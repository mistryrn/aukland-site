jQuery(document).ready(function() {
    var wasForced = false;
    jQuery('#menu-toggle').click(function (e) {
      e.stopPropagation();
      e.preventDefault();
      jQuery('.nav').addClass('notransition');
      jQuery('#menu').toggleClass('open');
      jQuery('.nav').toggleClass('open');
      jQuery('.nav')[0].offsetHeight;
      jQuery('.nav').removeClass('notransition');
    });
});
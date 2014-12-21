jQuery(document).ready(function() {
    var numBgs = 4;
    var num = Math.floor((Math.random() * numBgs) + 1);
    var style = "url('wp-content/themes/aukland/images/bg" + num + ".jpg')";
    jQuery('.main-hero').css('background-image', style);
});

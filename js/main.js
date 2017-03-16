jQuery(document).ready(function(){
    // Main navigation toggle
    jQuery('.navigation .navigation_toggle').on('click', function(evt){
        evt.preventDefault();
        jQuery(this).parent().toggleClass('navigation-open');
    });
    // Main navigation toggle
    jQuery('.navigation .dropdown > a').on('click', function(evt){
        evt.preventDefault();
        jQuery(this).parent().toggleClass('open');
    });
});
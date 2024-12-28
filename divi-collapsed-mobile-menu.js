jQuery(function($) {
    function setup_collapsible_submenus() {
        var FirstLevel = $('.et_mobile_menu .first-level > a');
        FirstLevel.off('click').click(function() {
            $(this).attr('href', '#');  
            $(this).parent().children().children().toggleClass('reveal-items');
            $(this).toggleClass('icon-switch');
        });
    }
    $(window).load(function() {
        setTimeout(function() {
            setup_collapsible_submenus();
        }, 700);
    });
});

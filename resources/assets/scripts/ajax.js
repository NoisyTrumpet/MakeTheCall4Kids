/* global my_ajax_object */

// JavaScript to be fired on all pages
jQuery(document).on('click', '.market-selector', function(e){
    e.preventDefault();
    
    const market = $(this).attr('href');
    const action = 'market_selection';
    
    const dataToSend = {
    market,
    action,
    }

    $.ajax({
        url: my_ajax_object.ajax_url,
        method: 'POST',
        data: dataToSend,
        }).done(function (data) {
        console.log(data);
        $('.navbar-brand').html(data);
        $('#market_selector_popup').fadeOut();
    });
});
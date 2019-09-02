export default {
  init() {
    // JavaScript to be fired on all pages

    jQuery(document).on('click', '.market-selector', function(e){
      e.preventDefault();

      const market = $(this).attr('href');
      const action = 'market_selection_action';
      const ajax_url = $(this).data('url');

      const dataToSend = {
        market,
        action,
      }

        jQuery.ajax({
              type:'POST',
              crossDomain : true,
              url: ajax_url,
              data: dataToSend,
          })
          .done(function(data){
            console.log(data);

            $('#market_selector_popup').fadeOut();
        });
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};

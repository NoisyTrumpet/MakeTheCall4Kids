<?php

namespace App;

class Ajax
{
    public function __construct()
    {
        add_action('wp_ajax_market_selection', [$this, 'marketSelection']);
        add_action('wp_ajax_nopriv_market_selection', [$this, 'marketSelection']);
    }

    public function marketSelection()
    {
        $selected_market = $_POST['market'];

        if(isset($selected_market)) {
            $_SESSION['selectedMarket'] = $selected_market;
        }

        $partials = array(
            'logo' => Template('partials.logos')
        );
        echo json_encode($partials);

        wp_die();
    }
}

new Ajax();

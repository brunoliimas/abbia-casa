<?php

class Woo {
    function linkCart() {
        return wc_get_cart_url();
    }
    function linkCheckout() {
        return wc_get_checkout_url();
    }
    function linkMyAccount() {
        return wc_get_page_permalink( 'myaccount' );
    }
}
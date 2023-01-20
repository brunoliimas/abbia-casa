<?php

function getSlug()
{
    $uri = $_SERVER["REQUEST_URI"];
    $uri = explode('/', $uri);
    $uri = array_filter($uri, function ($u) {
        return !empty($u);
    });
    $uri = array_values($uri);
    $uri = array_reverse($uri);
    $uri = $uri[0];
    $uri = empty($uri) ? 'home' : $uri;
    $uri = "custom-{$uri}";
    return $uri;
}

function apiJson($payload = [])
{
    if (isset($_REQUEST['json'])) {
        echo json_encode($payload);
        die;
    }
}

function getProd($ID)
{
    $product = wc_get_product($ID);
    return [
        "id" => $ID,
        "name" => $product->get_name(),
        "status" => $product->get_status(),
        "description" => $product->get_description(),
        "short" => $product->get_short_description(),
        "sku" => $product->get_sku(),
        "link" => get_permalink($product->get_id()),
        "price" => number_format($product->get_price(), 2, ',', '.'),
        "regular_price" => number_format($product->get_regular_price(), 2, ',', '.'),
        "unidades" => $product->get_stock_quantity(),
        "stock" => $product->get_stock_status(),
        "l" => $product->get_weight(),
        "p" => $product->get_length(),
        "a" => $product->get_height(),
        "image" => get_the_post_thumbnail_url($ID, 'full'),
        "galeria" => array_map(function ($id) {
            return wp_get_attachment_image_src($id, 'full')[0];
        }, $product->get_gallery_image_ids()),
        "add_cart" => "?add-to-cart=" . $ID,
        "attributes" => explode(', ', $product->get_attribute('pa_cores')),
    ];
}

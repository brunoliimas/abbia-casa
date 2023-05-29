<?php

class Product
{

    function __construct()
    {
    }

    function get_all()
    {
        $all_prod = wc_get_products(array(
            'status' => 'publish',
            'limit' => -1
        ));
        return $this->porterProduct($all_prod);
    }

    function productsByCategorySlug($slug)
    {
        $allProducts = $this->getAllProductBySlugCategory($slug);
        return $this->porterProduct($allProducts);
    }

    function getIdCategoryBySlug($slug)
    {
        return get_term_by('name', $slug, 'product_cat')->term_id;
    }

    function getAllProductBySlugCategory($slug)
    {
        return wc_get_products(array(
            'category' => array($slug),
            'limit' => -1
        ));
    }

    function sale($regular, $discount)
    {
        // "sale" => intval( (($p->get_price() * 100) / $p->get_regular_price()) - 100 ) ?? 0,

        if ($regular != $discount) {
            return intval((($discount * 100) / $regular) - 100);
        }
        return 0;
    }

    function get_all_prod_bay_id_cats(array $product_term_ids)
    {

        $product_term_args = array(
            'taxonomy' => 'product_cat',
            'include' => $product_term_ids,
            'orderby'  => 'include'
        );
        $product_terms = get_terms($product_term_args);

        $product_term_slugs = [];
        foreach ($product_terms as $product_term) {
            $product_term_slugs[] = $product_term->slug;
        }

        $product_args = array(
            'post_status' => 'publish',
            'limit' => -1,
            'category' => $product_term_slugs,
            //more options according to wc_get_products() docs
        );
        $products = wc_get_products($product_args);

        return array_map(function ($p) use ($categoryId) {
            return [
                "ID" => $p->get_id(),
                "title" => $p->get_name(),
                "slug" => $p->get_slug(),
                "new" => in_array($categoryId, $p->get_category_ids()),
                "price" => $p->get_price(),
                "image" => get_the_post_thumbnail_url($p->get_id()),
                "description" => $p->get_short_description(),
                "linkSingle" => get_permalink($p->get_id()),
                "whishList" => do_shortcode("[ti_wishlists_addtowishlist product_id=\"" . $p->get_id() . "\" variation_id=\"0\"]"),
                "addToCart" => do_shortcode("[add_to_cart_url id=\"" . $p->get_id() . "\"]"),
                "inStock" => $p->get_stock_status(),
                "price_regular" => $p->get_regular_price(),
                "sale" => $this->sale($p->get_regular_price(), $p->get_price()),

            ];
        }, $products);

    }

    function porterProduct($listProductObject)
    {
        $categoryId = $this->getIdCategoryBySlug('novidade');
        return array_map(function ($p) use ($categoryId) {
            return [
                "ID" => $p->get_id(),
                "title" => $p->get_name(),
                "slug" => $p->get_slug(),
                "new" => in_array($categoryId, $p->get_category_ids()),
                "price" => number_format( $p->get_price(), 2, ',','.' ),
                "image" => get_the_post_thumbnail_url($p->get_id()),
                "description" => $p->get_short_description(),
                "linkSingle" => get_permalink($p->get_id()),
                "whishList" => do_shortcode("[ti_wishlists_addtowishlist product_id=\"" . $p->get_id() . "\" variation_id=\"0\"]"),
                "addToCart" => do_shortcode("[add_to_cart_url id=\"" . $p->get_id() . "\"]"),
                "inStock" => $p->get_stock_status(),
                "price_regular" => $p->get_regular_price(),
                "sale" => $this->sale($p->get_regular_price(), $p->get_price()),

            ];
        }, $listProductObject);
    }
}

<?php

class Product
{

    function __construct()
    {
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
        ));
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
                "price" => $p->get_price(),
                "image" => get_the_post_thumbnail_url($p->get_id()),
                "description" => $p->get_short_description(),
                "linkSingle" => get_permalink($p->get_id()),
                "whishList" => do_shortcode("[ti_wishlists_addtowishlist product_id=\"" . $p->get_id() . "\" variation_id=\"0\"]"),
                "addToCart" => do_shortcode("[add_to_cart_url id=\"".$p->get_id()."\"]"),
                "inStock" => $p->get_stock_status()
            ];
        }, $listProductObject);
    }
}

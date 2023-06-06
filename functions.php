<?php

include __DIR__ . "/classes/Layout.php";
include __DIR__ . "/classes/Page.php";
include __DIR__ . "/classes/Category.php";
include __DIR__ . "/classes/Product.php";
include __DIR__ . "/inc/helps.php";
include __DIR__ . "/inc/short_summary.php";
include __DIR__ . "/inc/theme_mod.php";

add_theme_support('block-templates');
add_theme_support('post-thumbnails');
set_post_thumbnail_size(1200, 9999);
add_theme_support('menus');

add_action('init', function () {
	register_nav_menus(array(
		'header'  => __('Menu Principal'),
		'termos' => __('LGPD'),
		'footer'   => __('Menu Rodapé'),
	));
});

add_filter('wc_add_to_cart_message_html', '__return_false');

function execShort($title, $content)
{
	return do_shortcode("[summary title=\"{$title}\"] {$content} [/summary]");
}

function get_menus_array($name)
{
	$nav = get_nav_menu_locations();
	$ID = $nav[$name];
	$list = wp_get_nav_menu_object($ID);
	$menu_items = wp_get_nav_menu_items($list->term_id);
	$arr = [];
	foreach($menu_items as $i) {
		if($i->menu_item_parent == '0') {
			$id = strval($i->ID);
			$arr[$id] = [
				'ID' => $i->ID,
				'menu_item_parent' => $i->menu_item_parent,
				'title' => $i->title,
				'url' => $i->url,
				'sub' => [],
			];
		}else {
			$id = strval($i->menu_item_parent);
			$arr[$id]['sub'][] = [
				'ID' => $i->ID,
				'menu_item_parent' => $i->menu_item_parent,
				'title' => $i->title,
				'url' => $i->url,
			];
		}
	}

	return $arr;
}
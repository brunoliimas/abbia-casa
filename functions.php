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

add_action('init', function () {
	register_nav_menus(array(
		'header'  => __('Menu Principal'),
		'termos' => __('LGPD'),
		'footer'   => __('Menu Rodapé'),
	));
});

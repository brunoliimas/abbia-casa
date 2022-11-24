<?php

include __DIR__ . "/classes/Layout.php";
include __DIR__ . "/classes/Page.php";
include __DIR__ . "/inc/helps.php";

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

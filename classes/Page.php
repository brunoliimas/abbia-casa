<?php

class Page
{
    public $id;
    public $title;
    public $resumo;
    public $link;
    public $image;
    function __construct()
    {
        while (have_posts()) :
            the_post();
            $this->id = get_the_ID();
            $this->title = strip_tags(get_the_title());
            $this->resumo = strip_tags(get_the_excerpt());
            $this->link = get_the_permalink();
            $this->image = get_the_post_thumbnail_url(get_the_ID(), 'full');
        endwhile;
        wp_reset_query();
    }
    function content() {
        while (have_posts()) :
            the_post();
            the_content();
        endwhile;
        wp_reset_query();
    }
}

<?php

class Category
{
    public $data;
    function __construct($name = false, $count = -1)
    {
        $this->data = [];
        $option = array( 'order' => 'ASC', 'posts_per_page' => $count);
        if($name) {
            $option['category_name'] = $name;
            query_posts($option);
        }
        while (have_posts()) :
            the_post();
            $this->data[] = (object) [
                "id" => get_the_ID(),
                "title" => strip_tags( get_the_title() ),
                "resumo" => strip_tags( get_the_excerpt() ),
                "link" => get_the_permalink(),
                "content" => get_the_content(),
                "image" => get_the_post_thumbnail_url(get_the_ID(), 'full'),
            ];
        endwhile;
        wp_reset_query();
    }
}

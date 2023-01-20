<?php

function short_summary($atributos, $content = null)
{
    $default = array(
        'title' => 'Titulo',
    );
    $payload = shortcode_atts($default, $atributos);
    $content = do_shortcode($content);

    $html = "<details class=\"border-t-[1px] py-4 border-cor1  \">";
    $html .= "    <summary class=\"text-[20px] list-none \">" . $payload["title"] . "</summary>";
    $html .= "    " . $content;
    $html .= "</details>";

    return $html;
}
add_shortcode('summary', 'short_summary');

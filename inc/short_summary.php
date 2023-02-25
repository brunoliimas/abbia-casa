<?php

function short_summary($atributos, $content = null)
{
    $default = array(
        'title' => 'Titulo',
    );
    $payload = shortcode_atts($default, $atributos);
    $content = do_shortcode($content);

    $html = "<details class=\"border-t-[1px] py-4 border-cor1 bg-plus bg-no-repeat bg-[right_top_1rem]  w-full\">";
    $html .= "    <summary class=\"text-[20px] list-none  \">" . $payload["title"] . "</summary>";
    $html .= " <span class=\"block text-[#333] p-4\">  $content </span> ";
    $html .= "</details>";

    return $html;
}
add_shortcode('summary', 'short_summary');

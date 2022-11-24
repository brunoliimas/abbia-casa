<?php

function getSlug() {
    $uri = $_SERVER["REQUEST_URI"];
    $uri = explode('/', $uri);
    $uri = array_filter($uri, function($u) {return !empty($u);});
    $uri = array_values($uri);
    $uri = array_reverse($uri);
    $uri = $uri[0];
    $uri = empty($uri) ? 'home' : $uri;
    $uri = "custom-{$uri}";
    return $uri;
}

getSlug();
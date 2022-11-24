<?php

class Layout
{
    public $site;
    public $base;
    public $title;
    function __construct()
    {
        $this->site = site_url();
        $this->base = get_template_directory_uri();
        $this->title = "Digital Point";
    }
    function image($filName)
    {
        return $this->base . "/assets/image{$filName}";
    }
    function logo($filName)
    {
        return $this->base . "/assets/logo{$filName}";
    }
    function ico($filName)
    {
        return $this->base . "/assets/icons{$filName}";
    }
    function js($filName)
    {
        return $this->base . "/assets/js{$filName}";
    }
    function linkMenu()
    {
        $cat = new Category("servicos");
        $data = array_map(function ($c) {
            return [
                "text" => $c->title,
                    "short" => $c->resumo,
                    "link" => $c->link
            ];
        }, $cat->data);
        return [
            ["text" => "Início", "link" => $this->site . "/", "sub" => []],
            ["text" => "Sobre", "link" => $this->site . "/sobre", "sub" => []],
            ["text" => "Serviços", "link" => "/category/servicos/", "sub" => $data],
            ["text" => "Contato", "link" => $this->site . "/contato", "sub" => []],
        ];
    }
    function linkCopy()
    {
        return [
            ["text" => "Termos", "link" => $this->site . "/termos"],
            ["text" => "Politica Privacidade", "link" => $this->site . "/politica-privacidade"],
            ["text" => "Cookie", "link" => $this->site . "/cookie"],
        ];
    }
    function social()
    {
        return [
            ["ico" => "/instagram.png", "text" => "Instagram", "link" => "https://www.instagram.com"],
            ["ico" => "/face.png", "text" => "Facebook", "link" => "https://www.facebook.com"],
            ["ico" => "/twitter.png", "text" => "Twitter", "link" => "https://twitter.com"],
        ];
    }
    public function nameSite()
    {
        bloginfo( 'name' );
    } 
    public function descriptionSite()
    {
        bloginfo( 'description' );
    }
    public function getFile($fileName)
    {
        return get_theme_file_uri( $fileName );
    }
    public function link($ID)
    {
        return get_permalink($ID);
    }
}

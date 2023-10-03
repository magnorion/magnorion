<?php

/**
* Functions.php
* Todas as funções e configurações do tema serão colocados aqui!
* @since 1.0
* @package magnorion
*/

define( "ASSETS", get_template_directory_uri() . "/assets" );
define( "DIST", get_template_directory_uri() . "/dist" );

### Configuração do tema
function magnorionConfig()
{
    add_theme_support( "post-thumbnails" );
    add_theme_support( "menus" );
}
add_action("after_setup_theme", "magnorionConfig");

### Assets do tema
function assetsSite()
{
    wp_enqueue_script( "core",  DIST . "/main.js" );
    wp_enqueue_style( "styles", DIST . "/main.css" );

    // Fonts
    wp_enqueue_style( "google-fonts", 
    "https://fonts.googleapis.com/css?family=Cabin|Lobster" );
}
add_action("wp_enqueue_scripts", "assetsSite");

### Adiciona limite para o excerpt
function excerptSize($length)
{
    return 20;
}
add_filter( "excerpt_length",  "excerptSize", 20);

### Retorna os 3 posts mais atuais
function mainPosts()
{
    $args = [
        "post_type" => "post",
        "category_name" => "destaque",
        "posts_per_page" => 3
    ];

    return new WP_Query($args);
}

### Retorna os dados do header para as páginas
function getPageStructure($id, $is_home) 
{
    $dados = [];
    if (is_archive()) {
        return [
            "image" => ASSETS . "/images/default.jpg",
            "title" => "Todos os Posts"
        ];
    } else if(!$is_home){
        $image = get_the_post_thumbnail_url($id) ?? ASSETS . "/images/default.jpg";

        return [
            "image" => $image,
            "title" => get_the_title($id)
        ];
    } else if ($is_home) {
        return [
            "image" => ASSETS . "/images/header.jpg",
            "title" => get_the_title($id),
            "content" => get_the_content($id)
        ];
    }
}

### Retorna o title dependendo da página
function titlePage()
{
    if (is_home() || is_front_page()) {
        return get_bloginfo() . " - " . get_bloginfo("description");
    }
    return get_the_title() . " - " . get_bloginfo();
}

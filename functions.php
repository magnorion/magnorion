<?php

    /**
    * Functions.php
    * Todas as funções e configurações do tema serão colocados aqui!
    * @since 1.0
    * @package magnorion
    */

    define( "ASSETS", get_template_directory_uri() . "/assets" );

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
        wp_enqueue_script( "core",  ASSETS . "/dist/site-bundle.js" );
        wp_enqueue_style( "styles", ASSETS . "/dist/style.css" );

        // Fonts
        wp_enqueue_style( "google-fonts", 
        "https://fonts.googleapis.com/css?family=Cabin|Lobster" );
    }
    add_action("wp_enqueue_scripts", "assetsSite");

    function excerptSize($length)
    {
        return 20;
    }
    add_filter( "excerpt_length",  "excerptSize", 20);

    function mainPosts()
    {
        $args = [
            "post_type" => "post",
            "posts_per_page" => 3
        ];

        return new WP_Query($args);
    }
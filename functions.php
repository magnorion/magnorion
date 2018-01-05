<?php

    /*
    *   Functions.php
    *   Todas as funções e configurações do tema serão colocados aqui!
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
        wp_enqueue_style("core", ASSETS . "/dist/site-bundle.js");
    }
    add_action("wp_enqueue_scripts", "assetsSite");

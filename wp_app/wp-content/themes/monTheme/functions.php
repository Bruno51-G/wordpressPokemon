<?php
function bg_add_thumbnails()
{
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'bg_add_thumbnails');


function bg_theme_menu()
{
    register_nav_menus([
        'main' => 'Menu Principal',
        'foot' => 'Menu bas de page'
    ]);
}

add_action('init', 'bg_theme_menu');


function bg_theme_sidebar()
{
    register_sidebar([
        'id' => 'main-sidebar',
        'name' => 'Sidebar Accueil',
        'before_widjet' => '<div class= "theme-widjet">',
        'after_widjet' => '</div>'
    ]);
}

add_action('init', 'bg_theme_sidebar');

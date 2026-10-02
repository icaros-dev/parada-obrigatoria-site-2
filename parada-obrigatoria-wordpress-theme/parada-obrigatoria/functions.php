<?php

function parada_obrigatoria_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
}
add_action('after_setup_theme', 'parada_obrigatoria_setup');

function parada_obrigatoria_enqueue_assets() {
    wp_enqueue_style(
        'parada-obrigatoria-main',
        get_stylesheet_uri(),
        array(),
        filemtime(get_stylesheet_directory() . '/style.css')
    );
}
add_action('wp_enqueue_scripts', 'parada_obrigatoria_enqueue_assets');

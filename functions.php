<?php

// adding the CSS and JS files

function gt_setup(){
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Mono&display=swap');
    wp_enqueue_style('fontawesome', '//use.kit.fontawesome.com/dc459b05e7.js');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'gt_setup');

// Adding Theme support

function gt_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html',
        array('comment-list', 'comment-form', 'search-form')  
    );
}

add_action('after_setup_theme', 'gt_init');

// Products Post Type

function gt_custom_post_type() {
    register_post_type('product',
        array(
            'rewrite' => array('slug' => 'products'),
            'labels' => array(
                'name' => 'Products',
                'singular_name' => 'Product',
                'add_new_item' => 'Add New Product',
                'edit_item' => 'Edit Product',
            ),
            'menu-icon' => 'dashicons-cart',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments'
            )
        )
            );
}

add_action('init', 'gt_custom_post_type'); 

// Sidebar

function gt_widgets() {
    register_sidebar(
        array(
            'name' => "Main Sidebar",
            'id' => 'main_sidebar',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        )
        );
}

add_action('widgets_init', 'gt_widgets');

// Filters

function search_filter($query) {
    if($query->is_search()){
        $query->set('post_type', array('post', 'project'));
    }
}

add_filter('pre_get_posts', 'search_filter');
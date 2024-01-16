<?php
    //add_image_size
    add_image_size('houses_banner', 1400, 600, ['center', 'center']);

    add_image_size('cover_house', 400,400,['center','center']);

    //supprimer margin-top 32px
    function remove_admin_login_header() {
        remove_action('wp_head', '_admin_bar_bump_cb');
    }
    add_action('get_header', 'remove_admin_login_header');

    //css
    //var_dump(get_template_directory_uri());
    //all
    wp_enqueue_style('reset', get_template_directory_uri().'/css/reset.css');
    wp_enqueue_style('style', get_template_directory_uri().'/css/style.css');
    wp_enqueue_style('font', get_template_directory_uri().'/css/font.css');
    wp_enqueue_style('all', get_template_directory_uri().'/css/all.css');
    //header
    wp_enqueue_style('header', get_template_directory_uri().'/css/header.css');
    wp_enqueue_style('nav', get_template_directory_uri().'/css/nav.css');
    //pages
    wp_enqueue_style('page-home', get_template_directory_uri().'/css/page-home.css');
    wp_enqueue_style('page-contact', get_template_directory_uri().'/css/page-contact.css');
    //footer
    wp_enqueue_style('footer', get_template_directory_uri().'/css/footer.css');
    //js
    wp_enqueue_script('nav-js', get_template_directory_uri() . '/js/nav.js', array(), '1.0.0', array("strategy" => "defer"));
?>
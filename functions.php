<?php
    //add_image_size
    add_image_size('houses_banner', 1400, 600, ['center', 'center']);
    add_image_size('cover_house', 400,400,['center','center']);
    add_image_size('quote', 500,500,['center','center']);
    add_image_size('small-bloc', 432,432,['center','center']);
    add_image_size('img-desc', 415,415,['center','center']);
    add_image_size('content-img', 550,550,['center','center']);

    //supprimer margin-top 32px
    function remove_admin_login_header() {
        remove_action('wp_head', '_admin_bar_bump_cb');
    }
    add_action('get_header', 'remove_admin_login_header');

    //css
    //var_dump(get_template_directory_uri());
    //all
    if (!is_admin()) {
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
        wp_enqueue_style('page-content', get_template_directory_uri().'/css/page-content.css');
        //layouts
        wp_enqueue_style('citation', get_template_directory_uri().'/css/citation.css');
        wp_enqueue_style('small-bloc', get_template_directory_uri().'/css/small-bloc.css');
        wp_enqueue_style('big-bloc', get_template_directory_uri().'/css/big-bloc.css');
        wp_enqueue_style('plus-button', get_template_directory_uri().'/css/plus-button.css');
        wp_enqueue_style('img-desc', get_template_directory_uri().'/css/img-desc.css');
        wp_enqueue_style('title-poivron', get_template_directory_uri().'/css/title-poivron.css');
        wp_enqueue_style('title-outline', get_template_directory_uri().'/css/title-outline.css');
        
        //footer
        wp_enqueue_style('footer', get_template_directory_uri().'/css/footer.css');
        //js
        wp_enqueue_script('nav-js', get_template_directory_uri() . '/js/nav.js', array(), '1.0.0', array("strategy" => "defer"));
    }

    function p($args){
        echo '<pre>';
        var_dump($args);
        echo '</pre>';
    }

    function d($args){
        p($args);
        die();
    }
?>
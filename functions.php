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
        //css
        wp_enqueue_style('style', get_template_directory_uri().'/css/style.css');
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
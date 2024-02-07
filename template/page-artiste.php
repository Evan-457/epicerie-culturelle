<?php 
    /* Template Name: Artiste */ 

  get_header();

  //var
  $categories = get_field('cat');
  //d($categories);
?>

<?php
    $content = [
        'title' => get_the_title()
    ];
    get_template_part('layouts/title','poivron', $content);
?>

<div class="wrapXL center-items grid-big-bloc">
    <?php 
        foreach ($categories as $cat) {
            //récupérer nom de la catégorie
            $post_type = get_post_type_object($cat['link']);
            $content = [
                'surtitle' => $cat['surtitle'],
                'name' => $post_type->label,
                'text' => $cat['text'],
                'link' => get_post_type_archive_link($post_type->name),
            ];

            get_template_part('layouts/big','bloc', $content);
        }
    ?>
</div>

<?php get_footer() ?>
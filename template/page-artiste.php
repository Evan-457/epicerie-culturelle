<?php 
    /* Template Name: Artiste */ 

  get_header();

  //var
  $title = get_field('title');

  $categories = get_field('cat');
  //d($categories);
?>


<div class="title-poivron">
    <h2 class="title-poivron-title"> <?php echo($title) ?> </h2>
    <img class="title-poivron-img" src="<?php echo(get_template_directory_uri()) ?>/img/double-poivron.svg" alt="pictogramme d'un poivron">
</div>

<div class="wrapXL grid-big-bloc">
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

            d(get_post_type_archive_link('peintre'));
            get_template_part('layouts/big','bloc', $content);
        }
        d($cat['link']);
    ?>
</div>

<?php get_footer() ?>
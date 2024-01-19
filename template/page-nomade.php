<?php 
    /* Template Name: Nomade */ 

  get_header();

  //var
  $categories = get_field('cat');
  $comings = get_field('coming');
?>

<?php
    $content = [
        'title' => get_the_title()
    ];
    get_template_part('layouts/title','poivron', $content);
?>

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

            get_template_part('layouts/big','bloc', $content);
        }
    ?>
</div>

<?php if($comings != ""): ?>

    <div class="center-items">
        <img class="double-poivron" src="<?php echo(get_template_directory_uri()) ?>/img/double-poivron.svg" alt="pictogramme avec les deux poivrons">
    </div>

    <?php
        $archive_object = get_post_type_object('coming');
        
        $content = [
            'title' => $archive_object->labels->name,
        ];
        get_template_part('layouts/title','outline', $content);
    ?>

    <div class="wrapXL grid-small-bloc">
        <?php
            foreach($comings as $coming) {
                $content = [
                    'img' => get_field('img', $coming->ID),
                    'name' => get_the_title($coming->ID),
                    'date' => get_field('date', $coming->ID),
                    'text' => get_field('text1', $coming->ID),
                    'activate' => true,
                    'link' => get_the_permalink($coming->ID)
                ];
                get_template_part('layouts/small','bloc', $content);
            }
        ?>
    </div>
    <div class="center-items">
        <a class="see-more" href="<?php echo(get_post_type_archive_link('coming')) ?>">Voir plus</a>
    </div>
<?php endif ?>

<?php get_footer() ?>
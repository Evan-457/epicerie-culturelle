<?php 
    /* Template Name: Grille */

    get_header();

    //var
    $title = get_the_title();
?>

<div class="title-poivron">
    <h2 class="title-poivron-title"> <?php echo($title) ?> </h2>
    <img class="title-poivron-img" src="<?php echo(get_template_directory_uri()) ?>/img/double-poivron.svg" alt="pictogramme d'un poivron">
</div>

<div class="wrapXL grid-small-bloc">
    <?php while (have_posts()) : the_post();
    
    //p($page);
    $content = [
        'img' => get_field('img'),
        'name' => get_the_title(),
        'date' => get_field('date'),
        'text' => get_field('text1'),
        'activate' => true,
        'link' => get_the_permalink()

    ];
    get_template_part('layouts/small','bloc', $content);
    

    endwhile;  ?>
</div>
<?php
    the_posts_pagination( array(
    'mid_size' => 2,
    'prev_text' => __( 'Page précédente', 'textdomain' ),
    'next_text' => __( 'Page suivante', 'textdomain' ),
    ) );
?>


<?php
    get_footer();
?>
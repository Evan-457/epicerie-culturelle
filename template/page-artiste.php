<?php 
    /* Template Name: Artiste */ 

  get_header();

  //var
  $title = get_field('title');

  $categories = get_field('cat');
?>


<div class="title-poivron">
    <h2 class="title-poivron-title"> <?php echo($title) ?> </h2>
    <img class="title-poivron-img" src="<?php echo(get_template_directory_uri()) ?>/img/double-poivron.svg" alt="pictogramme d'un poivron">
</div>


<?php 
foreach ($categories as $cat) {
    $post_type = get_post_type_object($cat['link']);
    // $post_type = get_post_type($cat['link']);
    //d($post_type);  
    $content = [
        'surtitle' => $cat['surtitle'],
        'name' => $post_type->label,
        'text' => $cat['text'],
        'link' => get_post_type_archive_link($cat['link']),
    ];
    get_template_part('layouts/big','bloc', $content);
}
?>

<?php get_footer() ?>
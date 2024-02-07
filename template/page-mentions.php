<?php 
    /* Template Name: Mentions légales */

    get_header();

    $parts = get_field('part');
?>

<div class="wrapXL title-poivron">
    <h2 class="title-poivron-title"> Mentions légales </h2>
    <img class="title-poivron-img" src="<?php echo(get_template_directory_uri()) ?>/img/double-poivron-title.svg" alt="pictogramme d'un poivron">
</div>

<div class="wrapL mentions-legales">
    <?php
        foreach ($parts as $part) {
            $content = [
                'title' => $part['title'],
                'text' => $part['text'],
            ];
            get_template_part('layouts/mentions','part', $content);
        }
    ?>
</div>


<?php
    get_footer();
?>
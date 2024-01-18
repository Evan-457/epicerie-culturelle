<?php 
    /* Template Name: Contenu */

    get_header();

    //var
    $title = get_field('title');
    $img = get_field('img');
    $text1 = get_field('text1');
    $text2 = get_field('text2');
    $flexible_contents = get_field('content');
?>

<div class="title-poivron">
    <h2 class="title-poivron-title"> <?php echo($title) ?> </h2>
    <img class="title-poivron-img" src="<?php echo(get_template_directory_uri()) ?>/img/double-poivron.svg" alt="pictogramme d'un poivron">
</div>

<div class="wrapL">
    <div class="content-line1">
        <img src="<?php echo($img['sizes']['content-img']); ?>" alt="<?php echo($img['alt']) ?>" height="<?php echo($img['sizes']['content-img-height']) ?>" width="<?php echo($img['sizes']['content-img-width']) ?>" loading="lazy">
        <p>
            <?php echo($text1) ?>
        </p>
    </div>
    <p class="content-line2">
        <?php echo($text2) ?>
    </p>
</div>

<div class=" wrapXL grid-small-bloc">
    <?php
        //import layouts
        foreach ($flexible_contents as $content) {
            $template_name = $content['acf_fc_layout'];
            $template_file = sprintf('%s/layouts/%s.php', get_template_directory(), $template_name);
        
            if (file_exists($template_file)) {  
                printf('<section class="layout_%s">', $template_name);
                include($template_file);
                printf('</section>');
            }
        }
    ?>
</div>


<?php
    get_footer();
?>
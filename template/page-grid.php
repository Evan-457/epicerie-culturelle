<?php 
    /* Template Name: Grille */

    get_header();

    //var
    $title = get_field('title');
    $flexible_contents = get_field('content');
?>

<div class="title-poivron">
    <h2 class="title-poivron-title"> <?php echo($title) ?> </h2>
    <img class="title-poivron-img" src="<?php echo(get_template_directory_uri()) ?>/img/double-poivron-title.svg" alt="pictogramme d'un poivron">
</div>

<div class="wrapXL center-items grid-small-bloc">
    <?php
        $pages = get_pages(['child_of' => $post->ID]);

        foreach($pages as $page) {
            p($page);
            $content = [
                'img' => get_field('img', $page->ID),
                'name' => get_field('title', $page->ID),
                'date' => get_field('date', $page->ID),
                'text' => get_field('text1', $page->ID),
                'activate' => get_field('activate', $page->ID),
                'link' => get_permalink($page->ID)

            ];
            get_template_part('layouts/small','bloc', $content);
        }
        
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
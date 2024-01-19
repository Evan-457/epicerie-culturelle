<?php 
    /* Template Name: Interview */ 

    get_header();

    //var
    $interviews = get_field('interviews');
    $title = get_field('title');
    $films = get_field('film');
?>

<?php
    $content = [
        'title' => get_the_title()
    ];
    get_template_part('layouts/title','poivron', $content);
?>

<div class="wrapXL grid-small-bloc">
    <?php
        foreach($interviews as $interview) {
            $content = [
                'img' => get_field('img', $interview->ID),
                'name' => get_the_title($interview->ID),
                'date' => get_field('date', $interview->ID),
                'text' => get_field('text1', $interview->ID),
                'activate' => true,
                'link' => get_the_permalink($interview->ID)
            ];
            get_template_part('layouts/small','bloc', $content);
        }
    ?>
</div>
<div class="center-items">
    <a class="see-more" href="<?php echo(get_post_type_archive_link('interviews')) ?>">Voir plus</a>
</div>

<div class="center-items">
    <img class="double-poivron" src="<?php echo(get_template_directory_uri()) ?>/img/double-poivron.svg" alt="pictogramme avec les deux poivrons">
</div>

<?php
    $content = [
        'title' => $title,
    ];
    get_template_part('layouts/title','outline', $content);
?>
<div class="wrapXL grid-small-bloc">
    <?php
        foreach($films as $film) {
            $content = [
                'img' => get_field('img', $film->ID),
                'name' => get_the_title($film->ID),
                'date' => get_field('date', $film->ID),
                'text' => get_field('text1', $film->ID),
                'activate' => true,
                'link' => get_the_permalink($film->ID)
            ];
            get_template_part('layouts/small','bloc', $content);
        }
    ?>
</div>
<div class="center-items">
    <a class="see-more" href="<?php echo(get_post_type_archive_link('film')) ?>">Voir plus</a>
</div>

<?php get_footer() ?>
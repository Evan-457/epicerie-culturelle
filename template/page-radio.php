<?php 
    /* Template Name: Radio */ 

    get_header();

    //var
    $you = get_field('you');
    $shows = get_field('themed-show');  
?>

<?php
    $content = [
        'title' => get_the_title()
    ];
    get_template_part('layouts/title','poivron', $content);
?>
<?php
    $content = [
        'title' => get_field('title1'),
    ];
    get_template_part('layouts/title','outline', $content);
?>

<?php
    $content = [
        'link' => get_field('link'),
        'date' => get_field('date'),
        'text' => get_field('text')
    ];
    get_template_part('layouts/img','desc', $content);
?>

<?php if(!empty($you)): ?>
    <?php
        $content = [
            'title' => get_field('title2'),
        ];
        get_template_part('layouts/title','outline', $content);
    ?>

    <div class="wrapXL grid-small-bloc">
        <?php
            foreach($you as $me) {
                $content = [
                    'img' => get_field('img', $me->ID),
                    'name' => get_the_title($me->ID),
                    'date' => get_field('date', $me->ID),
                    'text' => get_field('text1', $me->ID),
                    'activate' => true,
                    'link' => get_the_permalink($me->ID)
                ];
                get_template_part('layouts/small','bloc', $content);
            }
        ?>
    </div>

    <div class="center-items">
        <a class="see-more" href="<?php echo(get_post_type_archive_link('you')) ?>">Voir plus</a>
    </div>
<?php endif ?>

<div class="center-items">
    <img class="double-poivron" src="<?php echo(get_template_directory_uri()) ?>/img/double-poivron.svg" alt="pictogramme avec les deux poivrons">
</div>

<?php if(!empty($shows)): ?>
    <?php
        $content = [
            'title' => get_field('title3'),
        ];
        get_template_part('layouts/title','outline', $content);
    ?>
    <div class="wrapXL grid-small-bloc">
        <?php
            foreach($shows as $show) {
                $content = [
                    'img' => get_field('img', $show->ID),
                    'name' => get_the_title($show->ID),
                    'date' => get_field('date', $show->ID),
                    'text' => get_field('text1', $show->ID),
                    'activate' => true,
                    'link' => get_the_permalink($show->ID)
                ];
                get_template_part('layouts/small','bloc', $content);
            }
        ?>
    </div>
    <div class="center-items">
        <a class="see-more" href="<?php echo(get_post_type_archive_link('themed-show')) ?>">Voir plus</a>
    </div>
<?php endif ?>

<?php get_footer() ?>
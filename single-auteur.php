<?php 
    /* Template Name: Contenu */

    get_header();

    //var
    $title = get_the_title();
    $img = get_field('img');
    $text1 = get_field('text1');
    $text2 = get_field('text2');
    $works = get_field('works');
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
<?php if(isset($works)): ?>
    <div class=" wrapXL grid-small-bloc">
        <?php
            //import layouts
            foreach ($works as $work) {
                $content = [
                    'img' => $work['img'],
                    'name' => $work['name'],
                    'text' => $work['text'],
                    'activate' => false,
                ];
                get_template_part('layouts/small','bloc', $content);
            }
        ?>
    </div>
<?php endif ?>


<?php
    get_footer();
?>
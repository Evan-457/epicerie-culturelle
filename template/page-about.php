<?php 
    /* Template Name: A propos */ 

    get_header();

    //var
    $interviews = get_field('interviews');
    $title1 = get_field('title1');
    $title2 = get_field('title2');
    $text = get_field('text');
    $works = get_field('works');
?>

<?php
    $content = [
        'title' => get_the_title()
    ];
    get_template_part('layouts/title','poivron', $content);
?>

<div class="wrapL">
    <?php
        $content = [
            'title' => $title1,
        ];
        get_template_part('layouts/title','outline', $content);
    ?>

    <div class="about-content"><?php echo($text) ?></div>

    <?php if((!empty($members) )): ?>
        <?php
            $content = [
                'title' => $title2,
            ];
            get_template_part('layouts/title','outline', $content);
        ?>

        <div class="wrapXL grid-small-bloc">
            <?php
                //import layouts
                foreach ($members as $member) {
                    $content = [
                        'img' => $member['img'],
                        'name' => $member['name'],
                        'text' => $member['text'],
                        'activate' => false,
                    ];
                    get_template_part('layouts/small','bloc', $content);
                }
            ?>
        </div>
    <?php endif ?>
</div>

<?php get_footer() ?>
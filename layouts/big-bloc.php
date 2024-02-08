<?php
    //p($content);
?>

<div class="big-bloc" <?php if(isset($args["color"])):?>style="background:<?php echo($args['color']) ?>" <?php endif ?>>
    <div class="big-bloc-content">
        <p class="big-bloc-cat"><?php echo($args['surtitle']) ?></p>
        <p class="big-bloc-title"><?php echo($args['name']) ?></p>
        <p class="big-bloc-desc"><?php echo(wp_trim_words($args['text'], 55, '...')) ?></p>
        <a class="plus-button" href="<?php echo($args['link']) ?>">
            <img src="<?php echo(get_template_directory_uri()) ?>/img/plus-button.svg" height="24px" width="24px" alt="En savoir plus">
            <p>
                En savoir plus
            </p>
        </a>
    </div>
</div>
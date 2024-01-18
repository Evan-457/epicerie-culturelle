<?php
    //p($content);
?>

<div class="big-bloc">
    <div class="big-bloc-content">
        <h5 class="big-bloc-cat"><?php echo($args['surtitle']) ?></h5>
        <h4 class="big-bloc-title"><?php echo($args['name']) ?></h4>
        <p class="big-bloc-desc"><?php echo($args['text']) ?></p>
        <a class="plus-button" href="<?php echo($args['link']) ?>">
            <img src="<?php echo(get_template_directory_uri()) ?>/img/plus-button.svg" height="24px" width="24px" alt="En savoir plus">
            <p>
                En savoir plus
            </p>
        </a>
    </div>
</div>
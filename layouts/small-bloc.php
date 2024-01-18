<?php
    p($args);
   
?>

<div class="small-bloc">
    <img src="<?php echo($args['img']['sizes']['small-bloc']); ?>" height="<?php echo($args['img']['sizes']['small-bloc-height']); ?>" width="<?php echo($args['img']['sizes']['small-bloc-width']); ?>" alt="<?php echo($args['img']['alt']); ?>">
    <div class="small-bloc-content">
        <div class="small-bloc-content-line1">
            <h4><?php echo($args['name']) ?></h4>
            <p><?php echo($args['date']) ?></p>
        </div>
        <p><?php echo($args['text']) ?></p>
        <?php if ($args['activate'] == true): ?>
            <a class="plus-button" href="<?php echo($args['link']) ?>">
                <img src="<?php echo(get_template_directory_uri()) ?>/img/plus-button.svg" height="24px" width="24px" alt="En savoir plus">
                <p>
                    En savoir plus
                </p>
            </a>
        <?php endif ?>
    </div>
</div>
<?php
    //p($content);
?>

<div class="small-bloc">
    <img src="<?php echo($content['img']['sizes']['small-bloc']); ?>" height="<?php echo($content['img']['sizes']['small-bloc-height']); ?>" width="<?php echo($content['img']['sizes']['small-bloc-width']); ?>" alt="<?php echo($content['img']['alt']); ?>">
    <div class="small-bloc-content">
        <div class="small-bloc-content-line1">
            <h4><?php echo($content['name']) ?></h4>
            <p><?php echo($content['date']) ?></p>
        </div>
        <p><?php echo($content['text']) ?></p>
        <a class="plus-button" href="">
            <img src="../wp-content/img/plus-button.svg" height="24px" width="24px" alt="En savoir plus">
            <p>
                En savoir plus
            </p>
        </a>
    </div>
</div>
<?php
    p($content);
?>

<div class="small-bloc">
    <img src="<?php echo($content['img']['sizes']['small-bloc']); ?>" height="<?php echo($content['img']['sizes']['small-bloc-height']); ?>" width="<?php echo($content['img']['sizes']['small-bloc-width']); ?>" alt="<?php echo($content['img']['alt']); ?>">
    <div class="small-bloc-content">
        <div class="small-bloc-content-line1">
            <h6><?php echo($content['name']) ?></h6>
            <p><?php echo($content['date']) ?></p>
        </div>
        <p><?php echo($content['text']) ?></p>
        <a href="">
            <img src="" alt="En savoir plus">
        </a>
    </div>
</div>
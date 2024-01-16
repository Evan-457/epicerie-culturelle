<?php
    //p($content);
?>

<div class="img-desc wrapL">
    <div class="img-desc-img">
    <img src="<?php echo($content['img']['sizes']['img-desc']); ?>" height="<?php echo($content['img']['sizes']['img-desc-height']); ?>" width="<?php echo($content['img']['sizes']['img-desc-width']); ?>" alt="<?php echo($content['img']['alt']); ?>">
    </div>
    <div class="img-desc-content">
        <h4 class="img-desc-title"><?php echo($content['title']) ?></h4>
        <p class="img-desc-text"<?php echo($content['text']) ?>> </p>
    </div>
</div>
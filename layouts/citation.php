<?php
    //p($content['img']);
?>

<div class="quote">
    <div class="wrapL">
        <div class="quote-left">
            <p class="quote-text"><?php echo($content['text']); ?></p>
            <p class="quote-name"><?php echo($content['name']); ?></p>
        </div>
        <div class="quote-right">
            
            
            <img src="<?php echo($content['img']['sizes']['quote']); ?>" height="<?php echo($content['img']['sizes']['quote-height']); ?>" width="<?php echo($content['img']['sizes']['quote-width']); ?>" alt="<?php echo($content['img']['alt']); ?>">
        </div>
    </div>
</div>
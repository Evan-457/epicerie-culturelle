<?php
    //d($args);
?>

<div class="quote">
    <div class="quote-content">
        <div class="quote-left">
            <p class="quote-text"><?php echo($args['text']); ?></p>
            <p class="quote-name"><?php echo($args['name']); ?></p>
        </div>
        <div class="quote-right">
            
            
            <img src="<?php echo($args['img']['sizes']['quote']); ?>" height="<?php echo($args['img']['sizes']['quote-height']); ?>" width="<?php echo($args['img']['sizes']['quote-width']); ?>" alt="<?php echo($args['img']['alt']); ?>">
        </div>
    </div>
</div>
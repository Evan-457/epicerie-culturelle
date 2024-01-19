<?php
    //p($content);
?>

<div class="img-desc wrapL">
    <div class="img-desc-img">
    <iframe class="wrapL last-podcast" src="https://www.youtube-nocookie.com/embed/<?php echo($link) ?>" frameborder="0"></iframe>
    </div>
    <div class="img-desc-content">
        <p class="img-desc-title"><?php echo($args['date']) ?></p>
        <div class="img-desc-text"> <?php echo($args['text']) ?> </div>
    </div>
</div>
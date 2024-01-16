<?php
    //p($content);
?>

<div class="big-bloc">
    <div class="big-bloc-content">
        <h5 class="big-bloc-cat"><?php echo($content['surtitle']) ?></h5>
        <h4 class="big-bloc-title"><?php echo($content['name']) ?></h4>
        <p class="big-bloc-desc"><?php echo($content['text']) ?></p>
        <a class="plus-button" href="">
            <img src="../wp-content/img/plus-button.svg" height="24px" width="24px" alt="En savoir plus">
            <p>
                En savoir plus
            </p>
        </a>
    </div>
</div>
<?php 
    /* Template Name: Maisons */ 

    get_header();
?>
<head>
      <link rel="stylesheet" href="../style.css" type="text/css">
</head>

Maisons

<?php 
    $title = get_field('title');
    $description = get_field('description');
    $banner = get_field('image');
    var_dump($title);
    echo('<pre>');
    var_dump($description);
    var_dump($banner);
    echo('</pre>');
?>

<section>
    <h1> <?php echo($title); ?> </h1>
    <p> <?php echo($description); ?> </p>
    <img src="<?php echo($banner['sizes']['houses_banner']); ?>" alt="<?php echo($banner['alt']) ?>" height="" width="" loading="lazy">
</section>

<section>
    <?php 
        $houses = get_pages([
            'child_of' => $post->ID
        ]);
        //var_dump($houses);


        foreach($houses as $house): ?>
            <div class="house_bloc">
                <?php $cover = get_field('image', $house->ID); ?>
                <img src="<?php echo($cover['sizes']['cover_house']); ?>" alt="" loading="lazy">

                <div class="bloc_content">
                <h2><?php echo($house -> post_title); ?></h2>

                <?php $price = get_field('price', $house->ID); ?>
                <p class="price"><?php echo($price); ?> €</p>

                <a href="<?php echo(get_permalink($house))?>">Button</a>

                <?php //var_dump($house); ?>
                </div>
            </div>
        <?php endforeach ?>
    ?>
</section>

<?php
    get_footer();
?>
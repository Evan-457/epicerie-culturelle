<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'épicerie culturelle du territoire</title>
    <link rel="icon" href="<?php echo(get_template_directory_uri()) ?>/img/logo-h.svg" type="svg">
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

    <header class="center-items">
        <a href="<?php echo(get_home_url()); ?>">
            <img class="logo" src="<?php echo(get_template_directory_uri()) ?>/img/logo-b.svg" alt="logo de l'épicerie culturelle">
        </a>
    </header>

    <?php 
        require get_template_directory() . '/template/nav.php';
    ?>

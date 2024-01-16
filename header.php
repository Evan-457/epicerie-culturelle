<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head() ?>
</head>

<body>

    <header>
        <img class="logo" src="wp-content/img/logo-b.svg" alt="logo de l'épicerie culturelle">
    </header>

    <?php 
        require get_template_directory() . '/template/nav.php';
    ?>

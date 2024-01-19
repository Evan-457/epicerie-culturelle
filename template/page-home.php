<?php 
    /* Template Name: Accueil */ 
    get_header();

    //var
    //citation
    $quotes = get_field('quotes');
    $rand_quote_i = array_rand($quotes,1);
    //actualités
    $title_part = get_field('title-part');
    $news = get_field('news');
    //month
    $months = get_field('month');
    
?>

<h1 class="home-slogan">L'art nous fait du bien</h1>

<?php
    //citation aléatoire
    $content = [
            'text' => $quotes[$rand_quote_i]['text'],
            'name' => $quotes[$rand_quote_i]['name'],
            'img' => $quotes[$rand_quote_i]['img']
        ];
    get_template_part('layouts/citation','', $content);
?>

<div class="wrapL title-poivron">
    <h2 class="title-poivron-title"> <?php echo($title_part) ?> </h2>
    <img class="title-poivron-img" src="<?php echo(get_template_directory_uri()) ?>/img/double-poivron.svg" alt="pictogramme d'un poivron">
</div>

<div class="news"> 
    <div class="wrapXL grid-small-bloc">
        <?php
            foreach($news as $new) {
                $content = [
                    'img' => get_field('img', $new->ID),
                    'name' => get_the_title($new->ID),
                    'date' => get_field('date', $new->ID),
                    'text' => get_field('text1', $new->ID),
                    'activate' => true,
                    'link' => get_the_permalink($new->ID)
                ];
                get_template_part('layouts/small','bloc', $content);
            }
        ?>
    </div>
    <div class="center-items">
        <a class="see-more" href="<?php echo(get_post_type_archive_link('news')) ?>">Voir plus</a>
    </div>
</div>

<div class="center-items">
    <img class="double-poivron" src="<?php echo(get_template_directory_uri()) ?>/img/double-poivron.svg" alt="pictogramme avec les deux poivrons">
</div>

<div class="wrapXL grid-big-bloc">
    <?php
        foreach($months as $month) {
            $content = [
                'surtitle' => get_the_title($month->ID),
                'name' => get_field('name', $month->ID),
                'text' => get_field('text1', $month->ID),
                'link' => get_the_permalink($month->ID),
            ];
            get_template_part('layouts/big','bloc', $content);
        }
    ?>
</div>

<?php
    get_footer();
?>
<?php 
    get_header();
?>

<p>Vôtre recherche : <?php echo(get_search_query()); ?></p>

<p>Résultat de la recherche :</p>

<?php
    global $wp_query;

?>
<br>
<?php 
if($wp_query->posts):
    foreach($wp_query->posts as $post): ?>
        <div>
            <p><?php echo($post->post_title); ?></p>
            <a href="<?php echo(get_permalink($post->ID)); ?>">Voir la page</a>
            
        </div>
    <?php endforeach; ?>
<?php endif; ?>
<?php
    get_footer();
?>
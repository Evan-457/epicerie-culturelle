<?php 
  get_header();

  //var
  $title = get_field('title');
?>


<div class="title-poivron">
    <h2 class="title-poivron-title"> <?php echo($title) ?> </h2>
    <img class="title-poivron-img" src="<?php echo(get_template_directory_uri()) ?>/img/double-poivron.svg" alt="pictogramme d'un poivron">
</div>

<?php 

$flexible_contents = get_field('content');

foreach ($flexible_contents as $content) {
  $template_name = $content['acf_fc_layout'];
  $template_file = sprintf('%s/layouts/%s.php', get_template_directory(), $template_name);

  if (file_exists($template_file)) {
    
    printf('<section class="layout_%s">', $template_name);
    include($template_file);
    printf('</section>');
  }

}

?>

<?php get_footer() ?>
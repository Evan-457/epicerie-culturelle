<?php 
    /* Template Name: Contact */ 

    get_header();

    $title = get_the_title();

    if (isset($_POST['submit']) && $_POST['firstname'] !== '') {
        var_dump($_POST);
        //$to = ;
        $subject = 'nouvelle demande de '.$_POST['firstname'].''.$_POST['lastname'];
        //$message = ;

        wp_mail( $to, $subject, $message, $headers, $attachments );
    }
?>

<div class="title-poivron">
    <h2 class="title-poivron-title"> <?php echo($title) ?> </h2>
    <img class="title-poivron-img" src="<?php echo(get_template_directory_uri()) ?>/img/double-poivron-title.svg" alt="pictogramme d'un poivron">
</div>

<form action="" method="post">
    <label>Nom</label> <br>
    <input type="text" name="lastname" placeholder="Prénom" value=""> <br>

    <label>Prénom</label> <br>
    <input type="text" name="firstname" placeholder="Nom" value=""> <br>

    <label>Adresse mail</label> <br>
    <input type="text" name="mail" placeholder="mail" value=""> <br>

    <label>Objet</label> <br>
    <input type="text" name="subject" placeholder="Nom" value=""> <br>

    <label>Message</label> <br>
    <textarea name="msg" placeholder="message" value=""></textarea> <br>

    <button class="form-submit" name="submit">
        <img src="<?php echo(get_template_directory_uri()) ?>/img/send.svg" alt="pictogramme de lettre">
        Envoyer
    </button>
</form>

<?php
    get_footer();
?>
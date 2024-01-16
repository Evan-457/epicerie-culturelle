<?php 
    /* Template Name: Contact */ 

    get_header();

    if (isset($_POST['submit']) && $_POST['firstname'] !== '') {
        var_dump($_POST);
        //$to = ;
        $subject = 'nouvelle demande de '.$_POST['firstname'].''.$_POST['lastname'];
        //$message = ;

        wp_mail( $to, $subject, $message, $headers, $attachments );
    }
?>

<div class="title-part">
    <img src="../wp-content/img/poivron.svg" alt="pictogramme d'un poivron">
    <h2>Title2</h2>
    <img src="../wp-content/img/poivron.svg" alt="pictogramme d'un poivron">
</div>

<h3>1 projet , 1 idée , nous en parler !</h3>

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
        <img src="../wp-content/img/send.svg" alt="pictogramme de lettre">
        Envoyer
    </button>
</form>

<?php
    get_footer();
?>
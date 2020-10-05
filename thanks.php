<?php

$firstname = $_POST['user_firstname'];
$lastname = $_POST['user_lastname'];
$email = $_POST['user_email'];
$phone = $_POST['user_phone'];
$theme = $_POST['user_theme'];
$comment = $_POST['user_message'];

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($firstname)) {
        echo "Le champ concernant votre prénom est vide";?><br><?php
    }

    if (empty($lastname)) {
        echo "Le champ concernant votre Nom est vide";?><br><?php
    }

    if (empty($email)) {
        echo "Le champ concernant votre email est vide";?><br><?php
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Votre format d'email est invalide";
    }

    if (empty($phone)) {
        echo "Le champ concernant votre numéro de téléphone est vide";?><br><?php
    }

    if (empty($comment)) {
        echo "Le champ concernant votre message est vide";?><br><?php
    }
    else {
    ?>Merci <?php echo $firstname . ' ' . $lastname ?> de nous avoir contacté à propos de <?php echo $theme ?>.<br><br>
    Un de nos conseiller vous contactera soit à l'adresse <?php echo $email ?> ou par téléphone au <?php echo $phone ?> dans les plus brefs délais pour traiter votre demande :<br><br>

    <?php echo $comment;
    }
}

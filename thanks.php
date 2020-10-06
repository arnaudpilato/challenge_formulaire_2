<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Thanks</h1>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                foreach ($_POST as $name => $input) {
                    $data[$name] = trim($input);
                }

                if (empty($data['user_firstname'])) {
                    $errors[] = 'Le champ concernant votre prénom est vide';
                }

                if (empty($data['user_lastname'])) {
                    $errors[] = 'Le champ concernant votre Nom est vide';
                }

                if (empty($data['user_email'])) {
                    $errors[] = 'Le champ concernant votre email est vide';
                }

                if (!filter_var($data['user_email'], FILTER_VALIDATE_EMAIL)) {
                    $errors[] = "Votre format d'email est invalide";
                }

                if (empty($data['user_phone'])) {
                    $errors[] = 'Le champ concernant votre numéro de téléphone est vide';
                }

                if (empty($data['user_message'])) {
                    $errors[] = 'Le champ concernant votre message est vide';
                }

                if (!empty($errors)) { ?>
                    <ul><?php
                        foreach ($errors as $error) {?>
                            <li><?= $error ?></li> <?php
                        }?>
                    </ul> <?php
                } else { ?>
                <?= 'Merci' . ' ' . htmlentities($_POST['user_firstname']) . ' ' . htmlentities($_POST['user_lastname']) . " de nous avoir contacté à propos " . htmlentities($_POST['user_theme']) . '.'?><br><br>
                <?= "Un de nos conseiller vous contactera soit à l'adresse " . htmlentities($_POST['user_email']) . ',' ?><br><?= "ou par téléphone au " . htmlentities($_POST['user_phone']) . " dans les plus brefs délais pour afin de traiter votre demande :" ?><br><br>
                <?php echo htmlentities($_POST['user_message']);
                }
            }?>

</body>
</html>

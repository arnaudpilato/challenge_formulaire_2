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
    <form  action="thanks.php"  method="post">
        <?php $email = 0; ?>
        <div>
            <label  for="lastname">Nom :</label>
            <input  type="text"  id="lastname"  name="user_lastname">
        </div>
        <div>
            <label  for="firstname">Prénom :</label>
            <input  type="text"  id="firstname"  name="user_firstname">
        </div>
        <div>
            <label  for="mail">Mail :</label>
            <input  type="email"  id="mail"  name="user_email" required>
        </div>
        <div>
            <label  for="phone">Phone :</label>
            <input  type="tel"  id="phone"  name="user_phone" required>
        </div>
        <div>
            <label for="user_theme">Sujet :</label>
            <select name="user_theme" id="user_theme">
                <option value="Tuyauterie">Tuyauterie</option>
                <option value="Raton Laveur">Raton Laveur</option>
                <option value="Bob l'éponge">Bob l'éponge</option>
                <option value="Tartiflette">Tartiflette</option>
                <option value="Manger des chips">Manger des chips</option>
            </select>
        </div>
        <div>
            <label  for="message">Message :</label>
            <textarea  id="message"  name="user_message"></textarea>
        </div>
        <div  class="button">
            <button  type="submit">Envoyer votre message</button>
        </div>
    </form>
</body>
</html>
<?php

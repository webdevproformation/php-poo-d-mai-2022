<?php  // http://localhost/php-poo/jour2/08-formulaire-poo.php
declare(strict_types=1);

spl_autoload_register(function($className){
    require "08-" . $className . ".php";
});

$formulaire = new Formulaire($_POST);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec PHP POO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form method="POST">
            <?php echo $formulaire->inputText("prenom" , "Votre Prénom") ; ?>
            <?php echo $formulaire->inputText("nom" , "Votre Nom") ; ?>
            <?php echo $formulaire->inputEmail("email" , "Votre email") ; ?>
            <?php echo $formulaire->inputColor("background" , "la couleur de background ??") ; ?>
            <?php echo $formulaire->inputText("age" , "Votre Age") ; ?>
            <?php echo $formulaire->inputText("adresse" , "Votre Adresse") ; ?>
            <?php echo $formulaire->inputText("profession" , "Votre Profession") ; ?>
            <?php echo $formulaire->inputSubmit() ; ?>
        </form>
    </div>
</body>
</html>


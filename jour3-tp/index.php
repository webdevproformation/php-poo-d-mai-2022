<?php // http://localhost/php-poo/jour3-tp
declare(strict_types=1);
spl_autoload_register(function($className){
    require "lib/" . $className . ".php";
});
if(!empty($_POST)){
    $commentaire = new CRUD("commentaires");
    $commentaire->create($_POST);
    $_POST = [];
}
$formulaire = new Formulaire($_POST);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisation POO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Ajouter un nouveau commentaire</h1>
        <form method="POST">
            <?php echo $formulaire->inputEmail("email" , "saisir votre email") ?>
            <?php echo $formulaire->textarea("contenu" , "saisir votre commentaire") ?>
            <?php echo $formulaire->inputSubmit() ?>
        </form>
    </div>
</body>
</html>

<!--
    dans le dossier jour3-tp créer un nouveau fichier article.php 

    loader toutes les class spl_autoad_register => lib 

    créer un formulaire qui contient un seul champ de type input qui aura comme name titre

    une fois que vous avez soumis votre formulaire => ajouter les données saisies dans la table articles associées
-->

<?php // http://localhost/php-poo/jour3-tp/article.php
declare(strict_types=1);

spl_autoload_register(function($className){
    require "lib/" . $className . ".php";
});

if(!empty($_POST)){
    $articles = new CRUD("articles");
    $articles->create($_POST);
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
    <title>Ajouter un nouvel article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Ajouter un nouvel article</h1>
        <form method="POST">
            <?php echo $formulaire->inputText("titre" , "Saisir le titre de l'article") ?>
            <?php echo $formulaire->textarea("contenu" , "Saisir le contenu de votre article") ?>
            <?php echo $formulaire->inputText("auteur" , "Saisir le nom du créateur") ?>
            <?php echo $formulaire->inputSubmit() ?>
        </form>
    </div>
</body>
</html>


<?php 
declare(strict_types=1);
spl_autoload_register(function($className){
    require "lib/" . $className . ".php";
});

$articles = new CRUD("articles");
$data = $articles->read();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des articles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header>
            <?php echo Lien::Menu() ?>
        </header>
        <h1>Tous les articles</h1>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>titre</th>
                    <th>contenu</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $d) : ?>
                    <tr>
                        <td><?php echo $d["id"] ?></td>
                        <td><?php echo $d["titre"] ?></td>
                        <td><?php echo $d["contenu"] ?></td>
                    </tr>   
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<!--
pouvez vous réaliser une nouvelle page => liste de commentaires
créer un nouveau ficheir list-commentaires.php 
=> ajouter à la barre de menu
=> dans la page => Menu + tableau avec la liste des commentaires en base de données 

-->
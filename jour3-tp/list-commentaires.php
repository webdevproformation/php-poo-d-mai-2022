<?php 
declare(strict_types=1);
spl_autoload_register(function($className){
    require "lib/" . $className . ".php";
});

$commentaires = new CRUD("commentaires");

if(isset($_GET["id"])){
    $id = (int)$_GET["id"] ; 
    $commentaires->delete($id); // DELETE FROM commentaires WHERE id = 7
}

$datas = $commentaires->read(); // SELECT * FROM commentaires ; 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des commentaires</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <header>
            <?php echo Lien::Menu() ?>
        </header>
        <h1>Liste des commentaires</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>email</th>
                    <th>contenu</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($datas as $d) : ?>
                    <tr>
                        <td><?php echo $d["id"] ?></td>
                        <td><?php echo $d["email"] ?></td>
                        <td><?php echo $d["contenu"] ?></td>
                        <td>
                            <a href="" class="btn btn-warning btn-sm me-3"> modifier</a>
                            <a href="?id=<?php echo $d["id"] ?>" class="btn btn-danger btn-sm" onclick="return confirm('êtes vous sur de vouloir supprimer l\'article <?php echo $d['id'] ?>  ??')">supprimer</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>
</html>


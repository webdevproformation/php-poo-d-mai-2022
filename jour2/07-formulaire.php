<!-- // http://localhost/php-poo/jour2/07-formulaire.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form method="POST">
            <div class="mb-3">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" name="prenom" id="prenom" value="<?= isset($_POST["prenom"]) ? $_POST["prenom"] : ""?>">
            </div>
            <div class="mb-3">
                <label for="nom">Votre nom</label>
                <input type="text" class="form-control" name="nom" id="nom" value="<?= isset($_POST["nom"]) ? $_POST["nom"] : ""?>">
            </div>
            <div class="mb-3">
                <label for="age">Votre age</label>
                <input type="text" class="form-control" name="age" id="age" value="<?= isset($_POST["age"]) ? $_POST["age"] : ""?>">
            </div>
            <div class="mb-3">
                <input type="submit"  class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>
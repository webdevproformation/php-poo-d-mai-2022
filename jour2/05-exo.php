<?php // http://localhost/php-poo/jour2/05-exo.php
declare(strict_types=1);

/* require "Formulaire.class.php";
require "Validator.class.php"; */

spl_autoload_register(function($className){
    $fichierClass = $className . ".class.php";
    require $fichierClass ; 

    // require $className . ".class.php";
});

$tableau = ["sujet" , "commentaire"];

$formulaire = new Formulaire($tableau);
$validator = new Validator($tableau);

var_dump($formulaire, $validator);
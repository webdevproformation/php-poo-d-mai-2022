<?php // http://localhost/php-poo/jour2/06-exo.php
declare(strict_types=1);

spl_autoload_register(function($nomClass){
    require $nomClass . "_class.php";
});

$etudiant = new Etudiant("Alain");
$devoir = new Devoir("PHP");
$professeur = new Professeur("Céline");

$professeur->donner($devoir , $etudiant); 


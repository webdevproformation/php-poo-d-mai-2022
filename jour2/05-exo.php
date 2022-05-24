<?php // http://localhost/php-poo/jour2/05-exo.php
declare(strict_types=1);

/* require "Formulaire.class.php";
require "Validator.class.php"; */

spl_autoload_register(function($className){
    $fichierClass = $className . ".class.php"; // "Formulaire.class.php"
    require $fichierClass ; 
    // require(Formulaireclass.php): Failed to open stream: No such file or directory in 
    
    // require $className . ".class.php";
});

$tableau = ["sujet" , "commentaire"];

$formulaire = new Formulaire($tableau);
$validator = new Validator($tableau);

var_dump($formulaire, $validator);

// créer 4 fichiers 
// 06-exo.php
// charger toutes les class 
// écrire dans le navigateur la phrase suivante
// var_dump( "Alain doit réaliser le devoir de PHP"  )

// nom du fichier Etudiant_class.php
// class Etudiant
// nom string  = ""
// constructeur
// getter

// nom du fichier Professeur_class.php
// class Professeur
// nom string = ""
// constructeur
// méthode donner devoir à un étudiant 
//        $etudiant + $devoir 
//       var_dump( "Alain doit réaliser le devoir de PHP"  )
// getter

// nom du fichier Devoir_class.php
// Devoir
// sujet string = ""
// constructeur
// getter

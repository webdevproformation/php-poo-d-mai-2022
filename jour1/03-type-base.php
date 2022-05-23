<?php 

// php initiation 

// en PHP pour créer une variable 

// type primitif 
$variable = "bonjour"; // string 

// type primitif en php => chiffre
// chiffre entier 

$duree = 10 ; // integer 

// chiffre à virgule 
$prix = 12.5 ; // float

// dernier type primitif 
$verif = true ; // boolean 
$isAdmin = false ; // boolean 

// 2 types complexes 
// variable qui vont contenir plusieurs valeurs en même (et de types primitifs ou complexes différents) 

// tableau / array 

// en php existe 2 types tableaux
// tableaux indexés

$jours = ["lundi" , "mardi" , "mercredi" , "jeudi"] ;

// récupérer la string "mercredi" la variable $jours[2]
// 2 correspond à la position de la string "mercredi" dans la variable tableau $jours 

$jours[2];

// tableaux associatifs 
// "cle" => "valeur"

$formation = [
    "duree" => 5 ,
    "nom"   => "Découvrir PHP POO",
    "unite" => "jours",
    "organisation" => "Doranco",
    "encours" => true
];

$formation["unite"];

// pour stocker des valeurs il existe un dernier type 
// dans lequel on va pouvoir stocker valeurs MAIS aussi des fonctions 

// objet 

// AVANT de pouvoir créer des objets il faut OBLIGATOIREMENT créer une class 

class Etudiant{
    // type de variable un peu spécial 
    // valeurs
    // fonctions 
    // $Etudiant => erreur 
    // PascalCase => convention d'écrire lorsque  l'on créé des class 
    // votre code fonctionne le même manière avec ou sans Etudiant etudiant
}

class FormeGeometrique{ // norme PascalCase

}

/* class formegeometrique{ // sans norme PascalCase

} */

class Arbre{
    // stocker des valeurs et des fonctions 
    // variable de class => propriété de class 
    // fonction de class => méthode de class 
    // ensemble de fonction / variable de class => membres de la class 
    public $nom = "Chêne";
    public $age = 50 ; 
    public $dansLaForet = true ; 
    public $caracteristiques = [ 
        "nomComplet" => "chêne liège",
        "couleur" => "verte"
     ] ;
    // dans la class Arbre => stocker 4 variables / propriétés 
    // de types différents 
}

// maintenant que l'on a créé notre class Arbre 

// il est possible desormais de créer des objets à partir de la class

$arbre1 = new Arbre(); // créer un object à partir de la class Arbre
                       // $arbre1 est une instance de la class Arbre 
                       // instanciation de la class Arbre 
echo "<pre>"; // MacOS 
var_dump($arbre1);  // xdebug 
// http://localhost/php-poo/jour1/03-type-base.php

/**
C:\xampp\htdocs\php-poo\jour1\03-type-base.php:98:
object(Arbre)[3] // objet de type Arbre [3] zone mémoire
  public 'nom' => string 'Chêne' (length=6)
  public 'age' => int 50
  public 'dansLaForet' => boolean true
  public 'caracteristiques' => 
    array (size=2) 
      'nomComplet' => string 'chêne liège' (length=13)
      'couleur' => string 'verte' (length=5)
*/

// concept 
// push les notes sur le github
// cas pratique
// 5 min - 10 min
// correction

// cas pratique :
// créer le fichier 04-exo.php 

// créer une class Etudiant 
// contient 5 propriétés 
// nom = "Alain"
// age = 40
// adresse = tableau 3 valeurs 
//           75 rue de Paris
//           paris
//           75000
// isAdmin = faux
// compétences tableau indexé 4 valeurs => PHP / JS / NOdeJS / Symfony / React

// à partir de cette class créer un objet etudiant1 
// afficher le contenu de cet objet dans le navigateur 



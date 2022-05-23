<?php // http://localhost/php-poo/jour1/05-method.php

// à partir de la version php 7.4 

class Rectangle{
    public int $largeur = 10 ; // vous pouvez ajouter le typage => meilleure idée de où ça bug dans votre code 
    // typage est facultatif 
    public float $hauteur = 30.5 ;
    public string $couleur = "rouge";
    // créer une fonction dans la class Rectangle 
    public function calculAire(){
        // pseudo variable $this
        // permet d'accéder aux propriétés d'une class dans une méthode
        // $this->largeur = 10 
        // $this->hauteur => OK 
        // $this->$hauteur  Erreur 
        $resultat = $this->largeur * $this->hauteur ;
        // $resultat = 10 * 30.5 ;
        var_dump($resultat);
    }
}

// exécuter la méthode calculAire()

// calculAire(); // fatal error  Call to undefined function calculAire()
// pour l'utiliser / exécuter 
// créer un objet
// à partir de cet objet exécuter la méthode

$r1 = new Rectangle(); // créer un objet
$r1->calculAire(); // exécute la méthode calculAire() à partir de $r1
// 305 !! 


// créer un nouveau fichier 06-exo.php 
// créer une class Livre
// cette class contient 5 propriétés :
// auteur Victor Hugo
// nom Les Misérables
// prix 20
// devise euros
// anneeParution 1862

// cette class contient 2 méthodes :
// méthode 1 : synopsis
// var_dump() => "Victor Hugo a publié Les Misérables en 1862"

// méthode 2 : vente
// var_dump() "Pour acheter, Les Misérables il faudra débourser 20 euros"

// exécuter les deux méthodes 

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
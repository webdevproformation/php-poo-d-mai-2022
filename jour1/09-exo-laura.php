<?php // http://localhost/php-poo/jour1/09-exo-laura.php
// sharemycode.fr/vup

class Joueur{
     private $nom = "";
     private $niveau = 0;

     public function setNom($valeur){
        if(gettype($valeur) == "string" && strlen($valeur) >= 3 ){
            return $this->nom = $valeur ;
     }

     throw new Exception("Le nom doit être une string de 3 lettres minimum");
    }

     public function getNom(){
        return $this->nom ;
     }
     public function setNiveau($valeur){
         if(gettype($valeur) == "integer" && $valeur >= 10 && $valeur <=100){
        // if (is_int($valeur))
            return $this-> niveau = $valeur;
         }
         throw new Exception( " Le niveau doit être un entier compris entre 10 et 100");
     }
     public function getNiveau(){
        return $this->niveau;
     }
}

$j1 = new Joueur();
$j1->setNom("Alain");
$j1->setNiveau (15);

$j2 = new Joueur();
$j2->setNom("Charles");
$j2->setNiveau(30) ;

var_dump($j1, $j2);

/* // string 
$toto = "bonjour";
strlen($toto); // compter le nombre de lettre dans la string !!!!

$tata = [];
strlen($tata) ; // erreur $tata doit contenir une string 

// array 
$titi = ["a","b"];
strlen($titi) ; // erreur $titi est un array 
$tutu = "coucou";
count($titi); // count($tableau) !!!!!!!!!!!!!!!!!! 
count($tutu) ; // erreur $tut est un string 

$chiffre = 10 ;
$isValid = $chiffre >= 10 && $chiffre <= 100 ;  // entre  */


$toto = 123;
var_dump(gettype($toto)); // integer
// int pour le typehint

// pause café rdv 15h35 @ toute suite !!! 

// utiliser des objets dans des class 
// 10-objet-objet.php
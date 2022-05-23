<?php // http://localhost/php-poo/jour1/07-getter-setter.php

// portée des variables  / scope 

class Voiture{
    public string $nom = "Peugeot 208";
    // propriété public 
    // utilisable dans la class avec la pseudo variable $this
    public function getNom(){
        var_dump($this->nom); 
    }
}

// utilisable hors de la class en utilisant l'objet

$v = new Voiture();
$v->nom = "Renault Touran" ; // modifier la valeur stockée depuis l'extérieur
var_dump($v->nom); // utilise la propriété hors de la class
$v->getNom(); // utilise la méthode public getNom() qui contient une propriété publique $nom; 

// propriété private 
class Etudiant {
    private int $age = 22;
    private string $nom = "Céline";
    // vous ne pouvez utiliser ces propriétés QUE dans la class via la pseudo variable $this
}

// vous ne pouvez pas utiliser ces propriétés hors de la class

$e = new Etudiant();
//var_dump($e->age);  // Fatal error: Uncaught Error: Cannot access private property
// $e->age = 30 ;  // Fatal error: Uncaught Error: Cannot access private property

// propriété privée 
// support 
/**
url : https://formation.webdevpro.net/php-poo
login : php
password : poo-avance
 */
// github pour les notes de cours
// https://github.com/webdevproformation/php-poo-d-mai-2022/ 
class Article {
    private string $titre = "Article 1";
    private string $auteur = "Victor Hugo"; 
    public function getTitre(){ // camelCase // getter 
        return $this->titre ;
    }
    public function setTitre($valeur){ // setter => modifier la valeur
        // d'une propriété privée 
        // avec une vérification préalable avant de stocker 
        if(gettype($valeur) == "string" && strlen($valeur) >= 2){
            return $this->titre = $valeur ;
        }
        throw new Exception("titre doit être une string de 2 lettres au minimum");
    }
}
$a = new Article();
var_dump($a->getTitre());
$a->setTitre("nouveau titre"); // valeur correcte
var_dump($a->getTitre());
$a->setTitre(true); // valeur incorrecte  Fatal error: Uncaught Exception: titre doit être une string de 2 lettres au minimum
var_dump($a->getTitre());

// si je veux pouvoir accéder à ma propriété de ma class 
// ajouter des fonctions mutater / setter => modifier
// ajouter des fonctions ascesseur  / getter => lire le contenu 
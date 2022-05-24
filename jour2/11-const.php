<?php // http://localhost/php-poo/jour2/11-const.php
class Joueur{
    // possible de créer un type de propriété 
    // dont la valeur est initialisée une seule fois 
    // plus possible de la modifier 

    public int $largeur = 12 ;
    public static int $hauteur = 30 ;
    const UNITE = "cm"; // norme => toutes les lettres en majuscule 

    // dans une class self
    
    public function surface(){
      return $this->largeur * self::$hauteur . " " . self::UNITE . "²" ; 
    }
}
$j = new Joueur();
var_dump($j->surface());

var_dump(Joueur::$hauteur); // utiliser une propriété statique publique hors de la class
var_dump(Joueur::UNITE); // utiliser une constante de class publique hors de la class

// cas pratique 

// créer le fichier 12-exo.php 

// class Role 
// 3 constantes
// ADMIN =>  2
// REDACTEUR => 1
// USER => 0

// class Profil 
// propriété private nom string
// propriété rôle ne peuvent avoir QUE les rôles définis dans la class Rôle
// créer les setter et getter nécessaires pour cette class




<?php // http://localhost/php-poo/jour2/09-static.php

// dans une class et les objets créés 
// stocker propriétés string / number / boolean / tableau / objet
// stoker des fonctions => méthodes 

// deux types de scopes 
// public => utilisé DANS la class / hors de la class 

// private => utilisé UNIQUEMENT DANS la class 
//   public setter / getter qui contient les propriétés privée
//   que l'on peut utiliser hors de la class 
// garantir que le code ne sera pas utilisé avec n'importe quoi 
// protégé 

class A{
    public string $taille = "distance";
    public function getTailleHtml (){
        return "<p>$this->taille</p>";
    }
}

$a = new A();
var_dump($a->taille);
var_dump($a->getTailleHtml());

class B{
    public static int $largeur = 30; // propriété public static 

    public function getLargeurHtml(){
        return "<p>". self::$largeur ."</p>";
        // remplace $this->largeur
        // par      self::$largeur
    }
}

/* $b = new B();
var_dump($b->largeur); */

var_dump(B::$largeur);  // utiliser une propriété static Hors de la class 



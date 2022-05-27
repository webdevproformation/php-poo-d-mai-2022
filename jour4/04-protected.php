<?php //http://localhost/php-poo/jour4/04-protected.php
// scope des propriétés public entre class
class Plante{ // class Parent 
    public string $nom = "une plante";
    public string $couleur = "rouge";

    public function info(){
        var_dump($this->nom);
    }
}

$p = new Plante(); // instance via un objet
$p->info();

class Fleur {
    public function description(){
        $p = new Plante(); // instance via un objet
        var_dump($p->couleur);
    }
}

class Rose extends Plante{
    public function modifCouleur(){
        $this->couleur = "rose";
    }
}


// 
class Vetement{
    private string $marque = "Petit Bateau"; 

    public function getM(){
        return $this->marque ;
    }
}

// erreur 
$v = new Vetement();
// var_dump($v->marque); // erreur => Fatal error: Uncaught Error: Cannot access private property Vetement::$marque 

class Pantalon extends Vetement{
    // la class n'a pas accès aux propriétés privées 
    // de la class Vêtement

    public function getMarque(){
        var_dump($this->marque); // erreur Warning: Undefined property: Pantalon::$marque
    }

    public function getMM(){
        var_dump($this->getM()); // utilise une méthode public que contient une prop privée
    }
}

$p = new Pantalon();
//$p->getMarque(); // erreur => je le connais pas la propriété   $marque

$p->getMM(); // OK  Petit Bateau 

// Private ne peut y accéder QUE dans la class 


// protected 
// intermédiaire entre public et private 
// utiliser dans la class qui la défini ET dans les enfants qui hérite de cette class
// ne peut etre utilisée directement à l'extérieur de la class ou d'une class enfant qui hérite 


class Ordinateur {
    protected string $processeur = "Intel core i7";
    protected string $marque = "Asus";
    protected int $prix = 1000 ;

    protected function description(){
        var_dump("mon PC est un $this->marque qui a un processeur $this->processeur");
    }
}
$ordi = new Ordinateur() ;
// $ordi->description(); // KO Fatal error: Uncaught Error: Call to protected method Ordinateur::description() from global scope
// pas possible d'utiliser DIRECTEMENT les propriétés protected hors la class / ou de son enfant
class NouveauPC extends Ordinateur{
    public function achat (){
        $this->marque = "IBM"; // OK
        $this->processeur = "Intel core i9"; // OK
        $this->description();  // OK
        var_dump("mon nouveau PC m'a couté " . ($this->prix + 500)); // OK
    }
}
$nouveau = new NouveauPC(); // OK
$nouveau->achat(); //OK

// encapsulation => espace dans notre code variable / fonction qui sont plus ou moins accessible / plus ou moins protégées

// cas pratique : créer le fichier 05-exo.php 

// plusieurs class à créer 
// class Plat
// 1 prop privée 
// nom de type string 

// 2 prop public 
// saison string
// ingredient tableau 

// 1 prop protected 
//  budget 

// créer les setter et getter pour la propriété privée

//----------------

// class Cassoulet qui hérite de Plat 

// contient 2 méthodes publiques 
// calculBudget( array $ingredient )
//somme des ingrediants mis dans le tableau pour calculer le budget

// description
// concaténation 
// pour faire un cassoulet il faut 40 euros ;

//----------------

$c = new Cassoulet();
$c->setNom("cassoulet");
$c->calculBudget(["ingredient1" => 10 , "ingredient2" => 20 , "ingredient3" => 10]);
$c->description(); 




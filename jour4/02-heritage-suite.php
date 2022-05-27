<?php //http://localhost/php-poo/jour4/02-heritage-suite.php

class Objet { // class Parent
    public string $nom ;
    public float $prix ;
    public function action(){
        var_dump("j'ai acheté $this->nom au prix de $this->prix euros");
    }
}
// class Enfant
class Table extends Objet{ // copier l'ensemble des prop et méthod la class Parent => Objet
    public function prixTTC(){ // Objet  avec méthode en +
        var_dump($this->prix  * 1.2);
    }
}
/** */
class Chaise extends Objet{
    public string $couleur = "rouge"; 
}
$c = new Chaise();
$c->nom ;
$c->action() ; // oui la méthode est disponible car dans son parent et public 
// deux class qui contiennent le même code 
// créer une classe parent qui va stocker les instructions
// communes au deux class 
// héritage permet de factoriser votre code 


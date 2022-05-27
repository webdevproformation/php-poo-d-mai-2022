<?php // http://localhost/php-poo/jour4/06-polymorphisme.php

// concept qui tourne autours de l'héritage

class Animal{

    public function chanter(){
        var_dump("chant inconnu ???");
    }
}

class Chat extends Animal{

    public function chanter(){ // le parent et enfant ont une méthode chanter qui ont la même signature 
        var_dump("Miou !!"); 
    }
}

$croquette = new Chat();
$croquette->chanter(); // "Miou !!"
// changer / remplacer / "override" la méthode définie dans le parent par une méthode définie dans l'enfant 
// polymorphisme 
// parent:: 
// constructeur parent / enfant 
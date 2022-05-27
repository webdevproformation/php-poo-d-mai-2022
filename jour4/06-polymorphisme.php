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

$croquette = new Chat(); // Enfant utilise une méthode définie Enfant et le Parent 
$croquette->chanter(); // "Miou !!"
// changer / remplacer / "override" la méthode définie dans le parent par une méthode définie dans l'enfant 
// polymorphisme 
// parent:: 
// constructeur parent / enfant 
// 13h30 bon appétit !!!! 

// polymorphisme 
// propriété / méthode dans une class parent => qui est modifiée dans la class Enfant 
// priorité la propriété / méthode dans l'Enfant overrider celle définie dans le parent

// 
<?php  //http://localhost/php-poo/jour4/03-exo.php

class Personnage{ // réduire la duplication de code entre plusieurs class 
    public string $nom = "";
    public int $experience = 10 ;
}

class Magicien extends Personnage{
    public function lancerUnSort(){
        var_dump($this->experience * 5);
    }
}

class Paladin extends Personnage{
    public function frapper(){
        var_dump($this->experience * 2);
    }
}

$merlin = new Magicien();
$merlin->lancerUnSort(); // 50

$chevalier = new Paladin();
$chevalier->frapper(); // 20 

// public private => protected 
// parent:: 
// $this-> self::
// polymorphisme 

// 10h50 bon café !! @ toute suite !!
<?php // http://localhost/php-poo/jour1/11-exo.php

class Personnage{
    private string $nom = "";
    private int $vie = 100; 
    public function frapper(Personnage $personnageAFrapper){
        //if($personnageAFrapper instanceof Personnage){
            /* $vie = $personnageAFrapper->getVie() - 10 ;
            $personnageAFrapper->setVie($vie); */
            // équivalent en 1 ligne 
            //$personnageAFrapper->vie = $personnageAFrapper->vie - 10 ;
            // équivalent en 1 ligne courte 
            $personnageAFrapper->vie -= 10 ;
        // }
    }
    public function getNom(){
        return $this->nom ;
    }
    public function setNom($valeur){
        if(is_string($valeur)) return $this->nom = $valeur; 
        throw new Exception("nom doit être une string");
    }
    public function getVie(){
        return $this->vie ;
    }
    public function setVie($valeur){
        if(is_int($valeur)) return $this->vie = $valeur ;
        throw new Exception("vie doit être un chiffre entier");
    }
}
// créer le magicien
$magicien = new Personnage();
$magicien->setNom("Merlin");
// créer le guerrier
$guerrier = new Personnage();
$guerrier->setNom("Alexandre le Grand");
// le guerrier frappe deux fois le magicien
$guerrier->frapper($magicien);
$guerrier->frapper($magicien);
// affiche le contenu des deux objets
var_dump($guerrier , $magicien);
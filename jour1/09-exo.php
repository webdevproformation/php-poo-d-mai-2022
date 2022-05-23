<?php // http://localhost/php-poo/jour1/09-exo.php

class Joueur{
    
    private string $nom = "";
    private int $niveau = 0 ;

    // class / objet => l'ordre n'a pas d'importance

    // norme d'abord les propriétés
    // et en suite les setter et getter la fin de la class
    // méthodes => fonctions qui font traitement => calcul / contacténation ... 

    public function getNom(){
        return $this->nom ;
    }
    public function getNiveau(){
        return $this->niveau ; 
    }
    public function setNom($valeur){
        if(gettype($valeur) == "string" && strlen($valeur) >= 3){
          return  $this->nom = $valeur ;
        }
        throw new Exception("nom doit être une string de 3 lettres minimum");
    }
    public function setNiveau($valeur){
        // gettype($valeur) == "int"
        if(is_int($valeur) && $valeur >= 10 && $valeur <= 100){
            return  $this->niveau = $valeur ;
        }
        throw new Exception("niveau doit être une entier compris entre 10 et 100");
    }
}
$j1 = new Joueur();
$j1->setNom("Alain");
$j1->setNiveau(15);

$j2 = new Joueur();
$j2->setNom("Charles");
$j2->setNiveau(30); // erreur ici Fatal error: Uncaught Exception: niveau doit être une entier compris entre 10 et 100
var_dump($j1 , $j2);
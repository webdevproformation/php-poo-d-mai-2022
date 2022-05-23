<?php // http://localhost/php-poo/jour1/08-exo.php

class Formation {
    private string $nom = "PHP Poo";
    private array $sujet = ["class" , "objet" , "constante"];
    public function setNom($valeur){
        if(gettype($valeur) == "string" && strlen($valeur) >= 5 ){
           return $this->nom = $valeur ;
        }
        throw new Exception("nom doit être une string de 5 lettres minimum");
    }
    public function getNom(){
        return $this->nom ;
    }
    public function setSujet($valeur){
        if(gettype($valeur) == "array" && count($valeur) >= 2){
            return $this->sujet = $valeur ;
        }
        throw new Exception("sujet doit être un array de 2 éléments minimum");
    }
    public function getSujet(){
        return $this->sujet ;
    }
}

$f = new Formation();
$f->setNom("découverte de la programmation sur Symfony");
$f->setSujet(["installation" , "deploiement"]);
var_dump($f); 

// programme informatique 
// si tu l'utilises directement => je le réutilise maintenant 
// je sais ce que je dois écrire !! 
/* nom = "texte" 
sujet = ["aa" , "bb"]

le même programme dans un mois => j'oublie comment je l'ai codé ??? 
je le donne à un autre développeur pour l'utiliser 

*/

/* $f = new Formation();
$f->nom = "a"; // erreur string mais avec 2 lettres minimum 
$f->sujet = "les sujets"; // erreur string alors que tu attends un array */

// dans un délai plus ou moins long => réutiliser ce code 
// pas d'erreur dans son utilisation moyen terme / long terme ! 

// cas pratique créer le fichier 09-exo.php 
/* créer une class Joueur 
posséde deux propriétés privées nom = "" / niveau = 0

pour initialiser ces deux propriétés => ascesseurs 
pour le nom => il faut obligatoirement que le nom soit un string et qu'il contient au mois 3 caractères
pour le niveau => il faut obligatoirement que le niveau soit un chiffre entier et qu'il soit compris entre 10 et 100 */

// créer deux joueurs 
// pour le 1er joueur nom => Alain / niveau 15
// pour le 2ème joueur nom => Charles / niveau 9
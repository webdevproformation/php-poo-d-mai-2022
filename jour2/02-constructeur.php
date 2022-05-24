<?php // http://localhost/php-poo/jour2/02-constructeur.php
declare(strict_types=1);

class Plante {
    private string $nom = ""; 
    private string $origine = ""; 
    private string $couleur = ""; 
    private string $dimensions = ""; 
    private string $largeur = ""; 
    private string $dt_naissance = ""; 

    // setter et getter 
}

// et 
/* $plante = new Plante();
$plante->setNom("tulipe");
$plante->setOrigine("Hollande");
$plante->setCouleur("rose");
$plante->setDimensions(10);
$plante->setLargeur(5);
$plante->setDtNaissance("01/01/2022"); // 7 instructions pour créer un objet */

// alternative 

// declare(strict_types=1); doit être écrite avant toutes les autres instructions

class Plante2 {
    private string $nom = ""; 
    private string $origine = ""; 
    private string $couleur = ""; 
    private int $dimensions = 0; 
    private int $largeur = 0 ; 
    private string $dt_naissance = ""; 

    // fonction magique => __construct()
    // PHP les exécutent automatique dans certains situations
    public function __construct( // // setter
                            string $nom_param , 
                            string $origine_param, 
                            string $couleur_param, 
                            int $dimensions_param , 
                            int $largeur_param , 
                            string $dt_naissance_param
    ){
        $this->nom = $nom_param;
        $this->origine = $origine_param;
        $this->couleur = $couleur_param;
        $this->dimensions = $dimensions_param;
        $this->largeur = $largeur_param;
        $this->dt_naissance = $dt_naissance_param;
    }
    //  et getter // il faudra quand même les créer
    public function getOrigine(){
        return $this->origine;
    }
}
$plante2 = new Plante2("", "Hollande" , "rose", 10 , 5 , "01/01/2022");

// var_dump($plante2->origine); // erreur
var_dump($plante2->getOrigine()); // OK 

// cas pratique créer le fichier 03-exo.php 

// créer la class Etudiant 
// 3 propriétés privées
// nom string 
// age chiffre entier
// competence // tableau 

// créer une méthode constructrice qui va initialiser les 3 propriétés de l'Etudiant

// créer les getter associés à chaque propriété

// créer deux étudiants
// etudiant1  : Alain / 22 / ["PHP", "JS"]
// etudiant2 : "Céline 18 / [NodeJS, Symfony , HTML, CSS]
<?php // http://localhost/php-poo/jour4/10-interface.php

// class
// https://www.php.net/manual/fr/language.oop5.interfaces.php
interface AdresseInterface{ // NomInterface 
    // suffixe permet de distinguer avec la class Adresse

    // stocker que des SIGNATURES de méthodes 

    public function getRue() ; // signature de méthode 

    public function getAdresseComplete() ; // signature

    public function isEnFrance( $ville ) ;
}

// contrat => règles pour construire une class 

class Adresse implements AdresseInterface{

    public string $rue ;
    public string $ville ; 

    // Obligatoire 
    public function getRue(){
        // ....
    }

    public function getAdresseComplete(){
        // ....
    }

    public function isEnFrance( $ville ){
        // ....
    }
    // fin Obligatoire 

    public function getVille(){} // méthode en +
}

// dans quel cas utilise les interface en PHP 

// forcer l'utilisateur / développeur à définir des méthodes pour créer un class 
// manière d'écrire / présence de ces méthodes doivent respecter le nommage déterminé 

function user ( AdresseInterface $adresse ){ // string $adresse
    // type hinting 
    // le paramètre $adresse doit respecter un contrat 

    $ville = "Paris";
    $adresse->isEnFrance($ville);

    $adresse->getRue();

}

// maintenant que l'on crée la fonction user(AdresseInterface $adresse)
// plus flexible 


class AdresseFrance implements AdresseInterface{
    public function getRue(){
        var_dump("je suis l'adresse en France");
    }
    public function getAdresseComplete(){
        var_dump("je suis l'adresse compléte en France");
    }
    public function isEnFrance( $ville ){
        var_dump("je suis Paris");
    }
}

class AdresseEtranger implements AdresseInterface{
    public function getRue(){
        var_dump("je suis l'adresse en Allemagne");
    }
    public function getAdresseComplete(){
        var_dump("je suis l'adresse compléte en Allemagne");
    }
    public function isEnFrance( $ville ){
        var_dump("je suis Berlin");
    }
}

user ( new AdresseFrance() ) ;
user ( new AdresseEtranger() ) ; 

// MySQL 
// SQlite 
// Oracle 
// MariaDB
// Access 
// .... https://sql.sh

// SQL INSERT INTO // SELECT * // DELETE ... 

// https://sql.sh/cours/merge
// MERGE => INSERT OU UPDATE => UPSERT

interface SQLInterface{
    public function fusion($id = null);
    public function conversion();
}
class SQLMySQL implements SQLInterface{
    public function fusion($id =null){
        if($id != null){
            // INSERT
        }else {
            // UPDATE 
        }
    }
    public function conversion(){}
}
class SQLOracle implements SQLInterface{
    public function fusion($id = null){
        // MERGE
    }
    public function conversion(){}
}

// cas pratique 
// créer le fichier 11-exo.php 

// créer une interface PageInterface

// décrire 3 méthodes
// render(chaine de caractère $url , tableau qui peut être vide)
// container (tableau )
// connexionDb (instance de PDO)

// créer deux class qui implémentent l'interface
// PageFrontOffice
// propriété public en + de votre choix

// PageBackOffice
// constructeur en plus de votre choix 






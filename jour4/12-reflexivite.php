<?php // http://localhost/php-poo/jour4/12-reflexivite.php

// PHPDoc => norme qui permet de créer DANS votre code un documentation technique
// comment utiliser vos class / Méthode .... 
// commentaire normalisé

/**
 * Undocumented class
 */
class Document{

    /**
     * Undocumented variable
     *
     * @var string
     */
    public string $url = "http://exemple.com";

    /**
     * présenter du concept de réflexivité en PHP
     *
     * @param string $titre le titre de la page 
     * @return int le nombre de paragraphe dans la page
     */
    public function generer(string $titre) :int {
        return 1; 
    }
}

$d = new Document();
$d->generer("dix");
// extensions = > VSC // PHP DocBlocker

/**
 * fonction qui permet de faire une addition
 *
 * @param int $a premier chiffre entier
 * @param int $b deuxième chiffre entier
 * @return void
 */
function calcul(int $a,int $b){

}

// Au dela permet de donnée des informations (mode d'emploi)
// il est possible d'y accéder pour les utiliser dans
// code 
// reflexivite => 

/**
 * je suis un commentaire
 */
class A{
    /**
     * commentaire dans la méthode
     * @Executer("bonjour")
     *
     * @return void
     */
    public function method(){

    }
}

$a = new A();

$reflexion = new ReflectionClass($a);
var_dump($reflexion->getDocComment());

$reflexionM = new ReflectionMethod("A" , "method");
$reflexionM = new ReflectionMethod( A::class , "method");
var_dump($reflexionM->getDocComment());
